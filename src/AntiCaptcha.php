<?php

namespace AniketIN\AntiCaptcha;

use AniketIN\AntiCaptcha\Utility\RecaptchaV2Proxyless;

class AntiCaptcha
{
    public function recaptchaV2Proxyless()
    {
        $client = new RecaptchaV2Proxyless;
        $client->setKey(config('anticaptcha.api_key'));

        return $client;
    }
}
