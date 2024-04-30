<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Role,Permission};
use Illuminate\Support\Str;
class RoleController extends Controller
{
    public function index(){
        $roles=Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function store(Request $request){
        $this->validate(request(), [
            'name' =>'required|string|unique:roles',
            'child' => 'array',
        ],
        [   
            'name.required' => 'Role Name is required *',
            'child.array' => 'Permission must be selected *',

        ]);
        $role = new Role();
        $permissionsPath = [];
        $role->name = $request->name;

        if ($request->filled('child')) {
            foreach ($request->input('child') as $permission) {
                $permissionsPath[] = Str::slug($permission);
            }
            $role->child = implode(', ', $permissionsPath);
        } else {
            $role->child = '';
        }
        $role->save();
        return redirect()->route('roles.index')->with('success','');
    }

    public function create(){
        $parents = Permission::with('child')->whereNull('parent_id')->get();
        return view('admin.roles.create', compact('parents')); 
    } 
    public function edit($id){
        $edit = Role::find($id);
        $parents = Permission::with('child')->whereNull('parent_id')->get();
        foreach (explode(',',$edit->child) as $ids) {
            $selectedPermissions[] = $ids;
        }
        return view('admin.roles.edit', compact('edit','parents','selectedPermissions'));
    }
    public function update(Request $request){
        $this->validate($request, [
            'name' =>'required',
            'child' => 'array|required|unique:permissions',
        ], [
            'name.required' => 'Role Name is required *',
            'child.array' => 'Permission must be selected *',
        ]);
        $role = Role::find($request->id);
        $role->name=$request->name;
        
        if ($request->filled('child')) {
            foreach ($request->input('child') as $permission) {
                $permissionsPath[] = $permission;
            }
            $role->child = implode(',', $permissionsPath);
        }
        $role->save();
        return redirect()->route('roles.index')->with('success','');

    }
    public function show($id){
        $show = Role::Find($id);
        return view("admin.roles.show", compact("show"));
        
    }
    public function delete($id){
        $role = Role::find($id);
        $role->delete();
        return response()->json(['success'=>'Role deleted successfully!']);
    }
}







