<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        define('SEED_COUNT', 10);

        $this->call(PermissionsTableSeeder::class);
	if(app()->isLocal()) {
            $this->call(CategoriesTableSeeder::class);
            $this->call(VitaminsTableSeeder::class);
            $this->call(SeedsTableSeeder::class);
            $this->call(UsersTableSeeder::class);
        }
    }
}
