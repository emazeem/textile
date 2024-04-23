<?php

namespace Database\Seeders;
use App\Model\Admin\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = new Permissions;
        $permission-> $user = "super-admin";
        $permission-> $role = "";
        $permission-> $designation = "";
        $permission-> $department = "";
    }
}
