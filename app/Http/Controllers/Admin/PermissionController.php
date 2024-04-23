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
            'name'=>'required',
            'category'=>'required',
        ],
        [   
            'name' => 'Name is required *',
            'category' => 'Category is required *',

        ]);
        $permission = new Permission();
        $permission->name=$request->name;
        $permission->category=$request->category;
        $permission->save();
        return response()->json(['success'=>'Permission added successfully!','id'=>$permission->id]);
    }
    public function edit(){
        return view("admin.permissions.edit");
    }
    public function show(){
        return view("admin.permissions.show");
    }
}
