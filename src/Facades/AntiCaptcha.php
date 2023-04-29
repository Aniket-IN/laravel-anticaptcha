<?php

namespace AniketIN\AntiCaptcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AniketIN\AntiCaptcha\AntiCaptcha
 */
class AntiCaptcha extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AniketIN\AntiCaptcha\AntiCaptcha::class;
    }
}
