<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Agronomist\Repositories\UserRepository;

class PermissionsTableSeeder extends Seeder
{
    private $repository = null;
    private $entities = ['approbation', 'category', 'harvest', 'request', 'seed', 'user', 'vitamin'];
    private $methods = ['viewAny', 'view', 'create', 'update', 'delete', 'restore', 'forceDelete'];

    function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createpermissions();
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'agronomist']);

        $adminRole->givePermissionTo(Permission::all());
        $userRole->givePermissionTo(Permission::all());

        $admin = $this->createUser('Alessandro Cappellozza', 'alessandro.cappellozza@gmail.com');
        $admin->assignRole('admin');

        $user = $this->createUser('Agronomist', 'agronomist@example.org');
        $user->assignRole('agronomist');
    }


    private function createUser($name, $email)
    {
        return $this->repository->create([
            'name' => $name,
            'email' => $email,
            'email_verified_at' => now(),
            'password' => Hash::make('test'),
            'remember_token' => Str::random(10)
        ]);
    }


    private function createpermissions()
    {
        foreach ($this->methods as $method) {
            foreach ($this->entities as $entity) {
                Permission::create(['name' => "{$method} {$entity}"]);
            }
        }
    }
}
