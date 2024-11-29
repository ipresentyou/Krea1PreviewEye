<?php declare(strict_types=1);

namespace FMJStudios\Boilerplate\Tests;

use Shopware\Core\TestBootstrapper;

$loader = (new TestBootstrapper())
    ->addCallingPlugin()
    ->addActivePlugins('FMJStudiosBoilerplate')
    ->setForceInstallPlugins(true)
    ->bootstrap()
    ->getClassLoader();

$loader->addPsr4('FMJStudios\Boilerplate\\Tests\\', __DIR__);