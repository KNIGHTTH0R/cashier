<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
          1 => ['name' => 'super'],
          2 => ['name' => 'owner'],
          3 => ['name' => 'cashier']
        ];

        $permissions = [
          1 => ['name' => 'manage_user']
        ];

        foreach ($roles as $id => $role) {
            Role::create(['name' => $role['name']]);
        }

        foreach ($permissions as $id => $permission) {
            Permission::create(['name' => $permission['name']]);
        }

        $super = Role::where('name', $roles[1]['name'])->first();
        $super->givePermissionTo(Permission::where('name', $permissions[1]['name'])->first());
    }
}
