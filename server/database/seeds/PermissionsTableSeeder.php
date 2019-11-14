<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'see seed']);

        $admin = Role::create(['name' => 'admin']);
        $agronomist = Role::create(['name' => 'agronomist']);
        $admin->givePermissionTo(Permission::all());
    }
}
