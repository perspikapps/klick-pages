<?php

namespace Perspikapps\KlickPages\Commands;

use Illuminate\Console\Command;

class KlickPagesCommand extends Command
{
    public $signature = 'klick-pages';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
