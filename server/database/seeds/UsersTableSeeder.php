<?php

use Illuminate\Database\Seeder;
use Agronomist\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($index=0; $index<SEED_COUNT; $index++)
            factory(User::class)->create();
    }
}
