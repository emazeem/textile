<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $adminRole->givePermissionTo([
            'create user',
            'edit user',
            'delete user',
            'show user',
            'create customer',
            'edit customer',
            'delete customer',
            'show customer',
            'create test',
            'edit test',
            'delete test',
            'show test',
            'create range',
            'edit range',
            'delete range',
            'show range',
            'create department',
            'edit department',
            'delete department',
            'create designation',
            'edit designation',
            'delete designation',
            'create work-order',
            'edit work-order',
            'delete work-order',
            'show work-order',
            'create permission',
            'edit permission',
            'delete permission',
            'show permission',
            'create role',
            'edit role',
            'delete role',
        ]);

        $userRole = Role::where('name', 'user')->first();
        $userRole->givePermissionTo([
            'show user',
            'show customer',
            'show department',
            'show designation',
            'show test',
            'show range',
            'show role',
            'show permission',
            'show work-order',
        ]);
    }
}
