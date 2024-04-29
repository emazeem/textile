<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\{Role,User};
use Hash;
use DB;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $adminPermission = Permission::create([
            'name' => 'Admin',
            'parent_id' => null
        ]);
        

        $permissions = [
        [
            'name' => 'View User',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Create User',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Edit User',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Show User',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Delete User',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Create Customer',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Edit Customer',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Delete Customer',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Show Customer',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Create Test',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Edit Test',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Delete Test',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Show Test',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Create Range',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Edit Range',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Delete Range',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Show Range',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Create Department',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Edit Department',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Delete Department',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Create Designation',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Edit Designation',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Delete Designation',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Create Work-Order',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Edit Work-Order',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Delete Work-Order',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Show Work-Order',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Create Permission',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Edit Permission',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Delete Permission',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Show Permission',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Create Role',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Edit Role',
            'parent_id' => $adminPermission->id,
        ],
        [
            'name' => 'Delete Role',
            'parent_id' => $adminPermission->id,
        ]];
        DB::table('permissions')->insert($permissions);
    }
}
