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
        $psalm->addStubFile($dir . '/stubs/Collection.php');
        $psalm->addStubFile($dir . '/stubs/Model.php');
        $psalm->addStubFile($dir . '/stubs/functions.php');
    }
}