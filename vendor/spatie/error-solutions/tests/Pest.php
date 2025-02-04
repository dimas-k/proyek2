<?php

use Dotenv\Dotenv;
use Livewire\Mechanisms\ComponentRegistry;
use OpenAI\Client;
use Spatie\ErrorSolutions\Tests\TestCase;

define('LIVEWIRE_VERSION_2', ! class_exists(ComponentRegistry::class));
define('LIVEWIRE_VERSION_3', class_exists(ComponentRegistry::class));

uses(TestCase::class)->in(__DIR__);

if (file_exists(__DIR__ . '/../.env')) {
    $dotEnv = Dotenv::createImmutable(__DIR__ . '/..');

    $dotEnv->load();
}

function canRunOpenAiTest(): bool
{
    if (empty(env('OPEN_API_KEY'))) {
        return false;
    }

    if (! class_exists(Client::class)) {
        return false;

    }

    return true;
}
