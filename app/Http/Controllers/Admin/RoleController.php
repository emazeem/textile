<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(){
        $roles=Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function store(Request $request){
        $this->validate(request(), [
            'name' =>'required',
            'permission_name' =>'required',
        ],
        [   
            'name.required' => 'Role Name is required *',
            'permission_name.required' => 'Permission Name is required *',

        ]);
        $role = new Role();
        $role->name=$request->name;
        $role->permission_name=$request->permission_name;
        $role->save();
        return redirect()->route('roles.index')->with('success','');

        
    }

    public function create(){
        return view('admin.roles.create'); 
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
}







