<?php

declare(strict_types=1);

namespace Larastan\Larastan\ReturnTypes;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Larastan\Larastan\Types\Factory\ModelFactoryType;
use PhpParser\Node\Expr\MethodCall;
use PHPStan\Analyser\Scope;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Reflection\ParametersAcceptorSelector;
use PHPStan\TrinaryLogic;
use PHPStan\Type\DynamicMethodReturnTypeExtension;
use PHPStan\Type\ErrorType;
use PHPStan\Type\IntegerType;
use PHPStan\Type\NullType;
use PHPStan\Type\ObjectType;
use PHPStan\Type\Type;
use PHPStan\Type\TypeCombinator;

use function in_array;

class FactoryDynamicMethodReturnTypeExtension implements DynamicMethodReturnTypeExtension
{
    public function getClass(): string
    {
        return Factory::class;
    }

    public function isMethodSupported(MethodReflection $methodReflection): bool
    {
        return true;
    }

    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $calledOnType       = $scope->getType($methodCall->var);
        $originalReturnType = ParametersAcceptorSelector::selectFromArgs($scope, $methodCall->getArgs(), $methodReflection->getVariants())->getReturnType();

        if (! $calledOnType instanceof ModelFactoryType) {
            return null;
        }

        if (in_array($methodReflection->getName(), ['count', 'times'], true)) {
            if ($methodCall->getArgs() === []) {
                return new ErrorType();
            }

            $argType = $scope->getType($methodCall->getArgs()[0]->value);

            if ((new IntegerType())->isSuperTypeOf($argType)->yes()) {
                return new ModelFactoryType($calledOnType->getClassName(), null, null, TrinaryLogic::createNo());
            }

            if ((new NullType())->isSuperTypeOf($argType)->yes()) {
                return new ModelFactoryType($calledOnType->getClassName(), null, null, TrinaryLogic::createYes());
            }

            return new ModelFactoryType($calledOnType->getClassName(), null, null, TrinaryLogic::createMaybe());
        }

        if (in_array($methodReflection->getName(), ['create', 'createQuietly', 'make'], true)) {
            if ($calledOnType->isSingleModel()->yes()) {
                return TypeCombinator::remove($originalReturnType, new ObjectType(Collection::class));
            }

            if ($calledOnType->isSingleModel()->no()) {
                return TypeCombinator::remove($originalReturnType, new ObjectType(Model::class));
            }
        }

        if (! $originalReturnType->isSuperTypeOf($calledOnType)->yes()) {
            return null;
        }

        return $calledOnType;
    }
}
