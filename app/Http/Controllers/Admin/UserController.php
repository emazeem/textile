<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Role,User};
use Hash;
class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view("admin.users.index", compact("users"));
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return response()->json(['success'=>'User deleted successfully']);
    }
    public function show($id){
        $show = User::Find($id);
        return view("admin.users.show", compact("show"));
    }
    public function edit($id){
        $edit = User::find($id);
        return view("admin.users.edit", compact("edit"));
    }
    public function update(Request $request)
{
    $this->validate($request, [
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required|email|unique:users,email,' . $request->id,
        'password' => 'required',
        'role' => 'required',
        'joining' => 'required',
        'designation' => 'required',
        'department' => 'required',
    ], [
        'fname.required' => 'First Name is required *',
        'lname.required' => 'Last Name is required *',
        'password.required' => 'Password is required *',
        'email.required' => 'Email is required *',
        'email.email' => 'Please enter a valid email address *',
        'email.unique' => 'This email is already taken *',
        'role.required' => 'Role is required *',
        'joining.required' => 'Joining date is required *',
        'designation.required' => 'Designation is required *',
        'department.required' => 'Department is required *',
    ]);
    
    $user = User::find($request->id);
    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }
    $user->fname = $request->fname;
    $user->lname = $request->lname;
    $user->role = $request->role;
    $user->joining = $request->joining;
    $user->email = $request->email;
    $user->designation = $request->designation;
    $user->department = $request->department;
    $user->password = Hash::make($request->password);

    $user->save();

    return response()->json(['success'=>'User updated successfully!','id'=>$user->id]);
}

    public function create(){
        $roles = Role::all();
        return view("admin.users.create", compact("roles"));
    }
    public function store(Request $request){
        
        $this->validate(request(), [
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required',
            'role'=>'required',
            'joining'=>'required',
            'designation'=>'required',
            'department'=>'required',
        ],
        [   
            'fname.required' => 'First Name is required *',
            'lname.required' => ' Last Name is required *',
            'email.required' => ' Email is required *',
            'email.unique' => ' The email is already taken *',
            'password.required' => ' Password is required *',
            'role.required' => ' Role is required *',
            'joining.required' => ' Joining date is required *',
            'designation.required' => ' Designation is required *',
            'department.required' => ' Department is required *',

        ]);
        $user = new User();
        $user->fname=$request->fname;
        $user->lname=$request->lname;
        $user->email=$request->email;
        $user->role=$request->role;
        $user->password=Hash::make($request->get('password'));
        $user->joining=$request->joining;
        $user->designation=$request->designation;
        $user->department=$request->department;

        $user->save();
        return response()->json(['success'=>'User added successfully!','id'=>$user->id]);
    }
}
