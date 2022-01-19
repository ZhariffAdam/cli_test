<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestString extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test and manipulate string to return response and create CSV file';

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
        $string = $this->ask('Please key in some string here.');
        $stringArray = str_split($string);

        // 1 - converts the string to uppercase and outputs it to stdout.
        $this->info(strtoupper($string));

        // 2 - converts the string to alternate upper and lower case and outputs it to stdout.
        $answer = null;
        foreach ($stringArray as $key => $eachArray) {
            $answer .= ($key % 2 == 0) ? strtoupper($eachArray) : strtolower($eachArray);
        }
        $this->info($answer);

        // 3 - creates a CSV file from the string by making each character a column in the CSV
        //     and then output  "CSV created!" to stdout.
        $date = new \DateTime();
        $path = storage_path('app/public/'.$date->getTimestamp().'.csv');
        $file = fopen($path,'w');
        fputcsv($file, $stringArray);
        fclose($file);
        $this->info('CSV created!');
    }
}
