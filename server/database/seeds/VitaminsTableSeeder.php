<?php

use Illuminate\Database\Seeder;
use Agronomist\Models\Vitamin;

class VitaminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($index=0; $index<SEED_COUNT; $index++)
            factory(Vitamin::class)->create(); 
    }
}
