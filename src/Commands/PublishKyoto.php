<?php

namespace Chuckbe\ChuckcmsTemplateKyoto\Commands;

use Chuckbe\ChuckcmsTemplateKyoto\migrations\seeds\ChuckcmsTemplateKyotoTableSeeder;
use Illuminate\Console\Command;

class PublishKyoto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chuckcms-template-kyoto:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command publishes the Kyoto template for ChuckCMS.';

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
     * @return mixed
     */
    public function handle()
    {
        $seeder = new ChuckcmsTemplateKyotoTableSeeder();
        $seeder->run();
        
        $this->info('Validating your information and generating a new site...');

        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('....  KYOTO  ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('....   NOW   ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info(' ');
        $this->info('ChuckCMS Template Kyoto published successfully');
        $this->info(' ');
        

        
    }
}
