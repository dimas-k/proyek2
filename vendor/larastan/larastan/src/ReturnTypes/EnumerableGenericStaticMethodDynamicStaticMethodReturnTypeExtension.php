<?php

declare(strict_types=1);

namespace Larastan\Larastan\ReturnTypes;

use Illuminate\Support\Collection;
use Illuminate\Support\Enumerable;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Name;
use PHPStan\Analyser\Scope;
use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Reflection\ParametersAcceptorSelector;
use PHPStan\Reflection\ReflectionProvider;
use PHPStan\Type\DynamicStaticMethodReturnTypeExtension;
use PHPStan\Type\ErrorType;
use PHPStan\Type\Generic\GenericObjectType;
use PHPStan\Type\ObjectType;
use PHPStan\Type\Type;
use PHPStan\Type\UnionType;

use function in_array;

class EnumerableGenericStaticMethodDynamicStaticMethodReturnTypeExtension implements DynamicStaticMethodReturnTypeExtension
{
    public function __construct(private ReflectionProvider $reflectionProvider)
    {
    }

    public function getClass(): string
    {
        return Enumerable::class;
    }

    public function isStaticMethodSupported(MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'make',
            'wrap',
            'times',
            'range',
        ], true);
    }

    public function getTypeFromStaticMethodCall(
        MethodReflection $methodReflection,
        StaticCall $methodCall,
        Scope $scope,
    ): Type {
        $returnType = ParametersAcceptorSelector::selectFromArgs(
            $scope,
            $methodCall->getArgs(),
            $methodReflection->getVariants(),
        )->getReturnType();

        if (! $returnType instanceof UnionType && $returnType->isObject()->no()) {
            return $returnType;
        }

        $class = $methodCall->class;

        if (! $class instanceof Name) {
            return new ErrorType();
        }

        if (! $this->reflectionProvider->hasClass((string) $class)) {
            return $returnType;
        }

        $classReflection = $this->reflectionProvider->getClass((string) $class);

        // If it's called on Support collection, just return.
        if ($classReflection->getName() === Collection::class) {
            return $returnType;
        }

        // If it's a UnionType, traverse the types and try to find a collection object type
        if ($returnType instanceof UnionType) {
            return $returnType->traverse(function (Type $type) use ($classReflection) {
                // @phpcs:ignore
                if ($type instanceof GenericObjectType && ($innerReflection = $type->getClassReflection()) !== null) { // @phpstan-ignore-line
                    return $this->handleGenericObjectType($classReflection, $innerReflection);
                }

                return $type;
            });
        }

        $returnTypeClassReflections = $returnType->getObjectClassReflections();

        if ($returnTypeClassReflections === []) {
            return $returnType;
        }

        return $this->handleGenericObjectType($classReflection, $returnTypeClassReflections[0]);
    }

    private function handleGenericObjectType(ClassReflection $classReflection, ClassReflection $returnTypeClassReflection): ObjectType
    {
        if ($classReflection->getActiveTemplateTypeMap()->count() !== $returnTypeClassReflection->getActiveTemplateTypeMap()->count()) {
            return new ObjectType($classReflection->getName());
        }

        return new GenericObjectType(
            $classReflection->getName(),
            $returnTypeClassReflection->typeMapToList($returnTypeClassReflection->getActiveTemplateTypeMap()),
        );
    }
}
