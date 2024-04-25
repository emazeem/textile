<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Role,Permission};

class RoleController extends Controller
{
    public function index(){
        $roles=Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function store(Request $request){
        $this->validate(request(), [
            'name' =>'required',
            'child' => 'array',
        ],
        [   
            'name.required' => 'Role Name is required *',
            'child.array' => 'Permission must be selected *',

        ]);
        $role = new Role();
        $role->name=$request->name;
        if ($request->filled('child')) {
            $permissionsPath = $request->input('child');
            $role->child = implode(',', $permissionsPath);
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
        return view('admin.roles.edit', compact('edit'));
    }
    public function update(Request $request){
        $this->validate($request, [
            'name' =>'required',
            'permission_name' =>'required',
        ], [
            'name.required' => 'Role Name is required *',
            'permission_name.required' => 'Permission Name is required *',
        ]);
        $role = Role::find($request->id);
        $role->name=$request->name;
        $role->permission_name=$request->permission_name;
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







