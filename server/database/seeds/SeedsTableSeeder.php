<?php

use Illuminate\Database\Seeder;
use Agronomist\Models\Seed;
use Agronomist\Models\Category;
use Agronomist\Models\Vitamin;

class SeedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        foreach(Category::get() as $category) {
            for($index=0; $index<SEED_COUNT; $index++) {
                $seed = factory(Seed::class)->create();
		$seed->category()->associate($category);

		$vitamins = Vitamin::all()->random(10);
		$seed->vitamins()->attach($vitamins);
		$seed->save();
            }
        }
    }
}
