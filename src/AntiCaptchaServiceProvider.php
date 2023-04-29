<?php

namespace AniketIN\AntiCaptcha;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AniketIN\AntiCaptcha\Commands\AntiCaptchaCommand;

class AntiCaptchaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-anticaptcha')
            ->hasConfigFile('anticaptcha.php')
            // ->hasViews()
            // ->hasMigration('create_laravel-anticaptcha_table')
            // ->hasCommand(AntiCaptchaCommand::class)
            ;
    }
}
