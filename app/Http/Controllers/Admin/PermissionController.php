<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::all();
        return view("admin.permissions.index",compact("permissions"));
    }
    public function create(){
        return view("admin.permissions.create");
    }
    public function store(Request $request){
        $this->validate(request(), [
            'name'=>'required|string|unique:permissions',
        ],
        [   
            'name' => 'Name is required *',

        ]);
        $permission = new Permission();
        $permission->name=$request->name;
        $permission->save();
        return redirect()->route('permissions.index')->with('success','');
    }
    public function edit($id){
        $permission = Permission::find($id);
        if (!$permission) {
        return response()->json(['error' => 'Permission not found'], 404);
    }
        return response()->json($permission);
    }
    public function update(Request $request){
        $this->validate($request, [
            'name'=>'required|string|unique:permissions',
        ], [
            'name' => 'Name is required *',
        ]);
        $permission = Permission::find($request->id);
        $permission->name=$request->name;
        $permission->save();
        return redirect()->route('permissions.index')->with('success','');
    }
    public function show(){
        return view("admin.permissions.show");
    }
    public function delete($id){
        Permission::find($id)->delete();
        return redirect()->route("permissions.index")->with("success","");
    }
}
