<?php

namespace AniketIN\AntiCaptcha;

use AniketIN\AntiCaptcha\Commands\AntiCaptchaCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasConfigFile('anticaptcha');
        // ->hasViews()
        // ->hasMigration('create_laravel-anticaptcha_table')
        // ->hasCommand(AntiCaptchaCommand::class)
    }
}
