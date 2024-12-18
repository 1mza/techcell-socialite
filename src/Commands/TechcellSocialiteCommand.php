<?php

namespace TechCell\TechcellSocialite\Commands;

use Illuminate\Console\Command;

class TechcellSocialiteCommand extends Command
{
    public $signature = 'techcell-socialite';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
