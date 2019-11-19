<?php

use Illuminate\Database\Seeder;

use Agronomist\Models\User;
use Agronomist\Models\Seed;
use Agronomist\Models\Harvest;
use Agronomist\Models\Request;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($index=0; $index<SEED_COUNT; $index++) {
            $user = factory(User::class)->create();
	    
	    $seeds = Seed::all()->random(5);
	    $user->seeds()->attach($seeds); 

	    foreach($seeds as $seed) {
	      $qty = rand(10, 1000);
	      $qty_seed = rand(10, $qty);
              $year = rand(0, 4) + 2015;

              Harvest::create( [ 'seed_id' => $seed->id, 'user_id' => $user->id, 'year' => $year, 'qty' => $qty, 'qty_seed' => $qty_seed ]);
              Request::create( [ 'user_id' => $user->id, 'seed_id' => $seed->id, 'qty' => $qty, 'note' => 'notes' ] ); 
            }
	}
    }
}
