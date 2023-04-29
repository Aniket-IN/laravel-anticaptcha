<?php

namespace AniketIN\AntiCaptcha\Commands;

use Illuminate\Console\Command;

class AntiCaptchaCommand extends Command
{
    public $signature = 'laravel-anticaptcha';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
