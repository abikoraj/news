<?php

namespace App\Console\Commands;

use App\Models\mun;
use App\Models\position;
use Faker\Factory;
use Illuminate\Console\Command;

class Insert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $faker = Factory::create();
        $muns = mun::all();
        foreach ($muns   as $key => $mun) {
            for ($i = 1; $i <= $mun->ward_nos; $i++) {
                for ($j = 0; $j < 5; $j++) {

                    $person = new position();
                    $person->name = $faker->name;
                    $person->identity = mt_rand(1, 3);
                    $person->min_id = $mun->id;
                    $person->ward_id = $i;
                    $person->votes = 0;
                    $person->party = $faker->cityPrefix;
                    $person->image = 'data/default.jpg';
                    $person->save();
                }
            }
        }
    }
}
