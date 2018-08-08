<?php

namespace App\Console\Commands;

use App\Traits\GuestsTrait;
use Illuminate\Console\Command;

class InvitedStatus extends Command
{
    use GuestsTrait;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'list:invited';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show all invited humans and their current status';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $list = $this->allInvitedStatus();
        foreach ($list as $line) {
            $this->line($line);
        }
    }
}
