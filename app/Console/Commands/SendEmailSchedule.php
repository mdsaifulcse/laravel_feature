<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\LoginslagEmail;
use Illuminate\Support\Facades\Mail;

class SendEmailSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:testSendEmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testing Email sending with Task Schedular';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        Mail::to('adeptsaiful@gmail.com')->send(new LoginslagEmail('Saiful Islam'));

        return Command::SUCCESS;
    }
}
