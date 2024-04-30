<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use Illuminate\Support\Str;
use Hash;
use DB;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $userPermission = Permission::create([
            'name' => 'Users',
            'slug' => Str::slug('Users'),
            'parent_id' => null
        ]);
        $customerPermission = Permission::create([
            'name' => 'Customers',
            'slug' => Str::slug('Customers'),
            'parent_id' => null
        ]);
        $testPermission = Permission::create([
            'name' => 'Tests',
            'slug' => Str::slug('Tests'),
            'parent_id' => null
        ]);
        $rangePermission = Permission::create([
            'name' => 'Ranges',
            'slug' => Str::slug('Ranges'),
            'parent_id' => null
        ]);
        $departmentPermission = Permission::create([
            'name' => 'Departments',
            'slug' => Str::slug('Departments'),
            'parent_id' => null
        ]);
        $designationPermission = Permission::create([
            'name' => 'Designations',
            'slug' => Str::slug('Designations'),
            'parent_id' => null
        ]);
        $workorderPermission = Permission::create([
            'name' => 'Work-Orders',
            'slug' => Str::slug('Work-Orders'),
            'parent_id' => null
        ]);
        $permissionPermission = Permission::create([
            'name' => 'Permissions',
            'slug' => Str::slug('Permissions'),
            'parent_id' => null
        ]);
        $rolePermission = Permission::create([
            'name' => 'Roles',
            'slug' => Str::slug('Roles'),
            'parent_id' => null
        ]);
        

        $permissions = [
        [
            'name' => 'View User',
            'parent_id' => $userPermission->id,
        ],
        [
            'name' => 'Create User',
            'parent_id' => $userPermission->id,
        ],
        [
            'name' => 'Edit User',
            'parent_id' => $userPermission->id,
        ],
        [
            'name' => 'Show User',
            'parent_id' => $userPermission->id,
        ],
        [
            'name' => 'Delete User',
            'parent_id' => $userPermission->id,
        ],
        [
            'name' => 'View Customer',
            'parent_id' => $customerPermission->id,
        ],
        [
            'name' => 'Create Customer',
            'parent_id' => $customerPermission->id,
        ],
        [
            'name' => 'Edit Customer',
            'parent_id' => $customerPermission->id,
        ],
        [
            'name' => 'Delete Customer',
            'parent_id' => $customerPermission->id,
        ],
        [
            'name' => 'Show Customer',
            'parent_id' => $customerPermission->id,
        ],
        [
            'name' => 'View Test',
            'parent_id' => $testPermission->id,
        ],
        [
            'name' => 'Create Test',
            'parent_id' => $testPermission->id,
        ],
        [
            'name' => 'Edit Test',
            'parent_id' => $testPermission->id,
        ],
        [
            'name' => 'Delete Test',
            'parent_id' => $testPermission->id,
        ],
        [
            'name' => 'Show Test',
            'parent_id' => $testPermission->id,
        ],
        [
            'name' => 'View Range',
            'parent_id' => $rangePermission->id,
        ],
        [
            'name' => 'Create Range',
            'parent_id' => $rangePermission->id,
        ],
        [
            'name' => 'Edit Range',
            'parent_id' => $rangePermission->id,
        ],
        [
            'name' => 'Delete Range',
            'parent_id' => $rangePermission->id,
        ],
        [
            'name' => 'Show Range',
            'parent_id' => $rangePermission->id,
        ],
        [
            'name' => 'View Department',
            'parent_id' => $departmentPermission->id,
        ],
        [
            'name' => 'Create Department',
            'parent_id' => $departmentPermission->id,
        ],
        [
            'name' => 'Edit Department',
            'parent_id' => $departmentPermission->id,
        ],
        [
            'name' => 'Delete Department',
            'parent_id' => $departmentPermission->id,
        ],
        [
            'name' => 'View Designation',
            'parent_id' => $designationPermission->id,
        ],
        [
            'name' => 'Create Designation',
            'parent_id' => $designationPermission->id,
        ],
        [
            'name' => 'Edit Designation',
            'parent_id' => $designationPermission->id,
        ],
        [
            'name' => 'Delete Designation',
            'parent_id' => $designationPermission->id,
        ],
        [
            'name' => 'View Work-Order',
            'parent_id' => $workorderPermission->id,
        ],
        [
            'name' => 'Create Work-Order',
            'parent_id' => $workorderPermission->id,
        ],
        [
            'name' => 'Edit Work-Order',
            'parent_id' => $workorderPermission->id,
        ],
        [
            'name' => 'Delete Work-Order',
            'parent_id' => $workorderPermission->id,
        ],
        [
            'name' => 'Show Work-Order',
            'parent_id' => $workorderPermission->id,
        ],
        [
            'name' => 'View Permission',
            'parent_id' => $permissionPermission->id,
        ],
        [
            'name' => 'Create Permission',
            'parent_id' => $permissionPermission->id,
        ],
        [
            'name' => 'Edit Permission',
            'parent_id' => $permissionPermission->id,
        ],
        [
            'name' => 'Delete Permission',
            'parent_id' => $permissionPermission->id,
        ],
        [
            'name' => 'Show Permission',
            'parent_id' => $permissionPermission->id,
        ],
        [
            'name' => 'View Role',
            'parent_id' => $rolePermission->id,
        ],
        [
            'name' => 'Create Role',
            'parent_id' => $rolePermission->id,
        ],
        [
            'name' => 'Edit Role',
            'parent_id' => $rolePermission->id,
        ],
        [
            'name' => 'Delete Role',
            'parent_id' => $rolePermission->id,
        ]];
        foreach ($permissions as &$permission) {
            $permission['slug'] = Str::slug($permission['name']);
        }
        DB::table('permissions')->insert($permissions);
    }
}
