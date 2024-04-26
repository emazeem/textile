<?php

namespace Database\Seeders;
use App\Model\Admin\Permission;
use App\Model\Admin\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $adminRole->givePermissionTo('create user');
        $adminRole->givePermissionTo('edit user');
        $adminRole->givePermissionTo('delete user');
        $adminRole->givePermissionTo('show user');
        $adminRole->givePermissionTo('create customer');
        $adminRole->givePermissionTo('edit customer');
        $adminRole->givePermissionTo('delete customer');
        $adminRole->givePermissionTo('show customer');
        $adminRole->givePermissionTo('create test');
        $adminRole->givePermissionTo('edit test');
        $adminRole->givePermissionTo('delete test');
        $adminRole->givePermissionTo('show test');
        $adminRole->givePermissionTo('create range');
        $adminRole->givePermissionTo('edit range');
        $adminRole->givePermissionTo('delete range');
        $adminRole->givePermissionTo('show range');
        $adminRole->givePermissionTo('create department');
        $adminRole->givePermissionTo('edit department');
        $adminRole->givePermissionTo('delete department');
        $adminRole->givePermissionTo('create designation');
        $adminRole->givePermissionTo('edit designation');
        $adminRole->givePermissionTo('delete desgination');
        $adminRole->givePermissionTo('create work-order');
        $adminRole->givePermissionTo('edit work-order');
        $adminRole->givePermissionTo('delete work-order');
        $adminRole->givePermissionTo('show work-order');  
        $adminRole->givePermissionTo('create permission');
        $adminRole->givePermissionTo('edit permission');
        $adminRole->givePermissionTo('delete permission');
        $adminRole->givePermissionTo('show permission');
        $adminRole->givePermissionTo('create role');
        $adminRole->givePermissionTo('edit role');
        $adminRole->givePermissionTo('delete role');              


        $userRole = Role::where('name', 'user')->first();
        $userRole->givePermissionTo('show user');
        $userRole->givePermissionTo('show customer');
        $userRole->givePermissionTo('show department');
        $userRole->givePermissionTo('show designation');
        $userRole->givePermissionTo('show test');
        $userRole->givePermissionTo('show range');
        $userRole->givePermissionTo('show role');
        $userRole->givePermissionTo('show permission');
        $userRole->givePermissionTo('show work-order');
    }
}