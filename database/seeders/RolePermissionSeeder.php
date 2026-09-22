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
        // Create Roles
        $adminRole = Role::create(['name'=> 'admin']);
        $UserRole = Role::create(['name'=> 'user']);

        //create Permissions
        $manageUserPermissions = Permission::create(['name'=>'manage users']);
        $viewDashboardPermissions = Permission::create(['name'=>'view dashboard']);

        //Assign roles to permissions
        $adminRole -> givePermissionTo($manageUserPermissions);
        $adminRole -> givePermissionTo($viewDashboardPermissions);
        $UserRole -> givePermissionTo($viewDashboardPermissions);

    }
}
