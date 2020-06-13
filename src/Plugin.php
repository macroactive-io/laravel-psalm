<?php

declare(strict_types=1);

namespace Macroactive\LaravelPsalmPlugin;

use SimpleXMLElement;
use Psalm\Plugin\PluginEntryPointInterface;
use Psalm\Plugin\RegistrationInterface;

final class Plugin implements PluginEntryPointInterface
{
    public function __invoke(RegistrationInterface $psalm, ?SimpleXMLElement $config = null): void
    {
        $dir = dirname(__DIR__);
        $psalm->addStubFile($dir . '/stubs/Enumerable.stubphp');
        $psalm->addStubFile($dir . '/stubs/Collection.stubphp');
        $psalm->addStubFile($dir . '/stubs/EloquentCollection.stubphp');
        $psalm->addStubFile($dir . '/stubs/Model.stubphp');
        $psalm->addStubFile($dir . '/stubs/Builder.stubphp');
        $psalm->addStubFile($dir . '/stubs/Paginator.stubphp');
    }
}