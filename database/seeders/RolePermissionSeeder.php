<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'add-user']);
        Permission::create(['name' => 'read-user']);
        Permission::create(['name' => 'update-user']);
        Permission::create(['name' => 'destroy-user']);

        Permission::create(['name' => 'add-event']);
        Permission::create(['name' => 'read-event']);
        Permission::create(['name' => 'update-event']);
        Permission::create(['name' => 'destroy-event']);

        Permission::create(['name' => 'add-ticket']);
        Permission::create(['name' => 'read-ticket']);
        Permission::create(['name' => 'update-ticket']);
        Permission::create(['name' => 'destroy-ticket']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'staff']);
        Role::create(['name' => 'customer']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('add-user');
        $roleAdmin->givePermissionTo('read-user');
        $roleAdmin->givePermissionTo('update-user');
        $roleAdmin->givePermissionTo('destroy-user');
        $roleAdmin->givePermissionTo('add-event');
        $roleAdmin->givePermissionTo('read-event');
        $roleAdmin->givePermissionTo('update-event');
        $roleAdmin->givePermissionTo('destroy-event');
        $roleAdmin->givePermissionTo('add-ticket');
        $roleAdmin->givePermissionTo('read-ticket');
        $roleAdmin->givePermissionTo('update-ticket');
        $roleAdmin->givePermissionTo('destroy-ticket');

        $roleStaff = Role::findByName('staff');
        $roleStaff->givePermissionTo('add-event');
        $roleStaff->givePermissionTo('read-event');
        $roleStaff->givePermissionTo('update-event');
        $roleStaff->givePermissionTo('destroy-event');
        $roleStaff->givePermissionTo('add-ticket');
        $roleStaff->givePermissionTo('read-ticket');
        $roleStaff->givePermissionTo('update-ticket');
        $roleStaff->givePermissionTo('destroy-ticket');

    }
}
