<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;
use Hash;
class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view("admin.users.index", compact("users"));
    }
    public function show($id){
        $show = User::Find($id);
        return view("admin.users.show", compact("show"));
    }
    public function edit($id){
        $edit = User::find($id);
        return view("admin.users.edit", compact("edit"));
    }
    public function update(Request $request){
        $this->validate(request(),[
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
                'lname.required' => ' LastName is required *',
                'password.required' => ' Password is required *',
                'email.required' => ' Email is required *',
                'role.required' => ' Role is required *',
                'joining.required' => ' Joining date is required *',
                'designation.required' => ' Designation is required *',
                'department.required' => ' Department is required *',
        ]);
        
        $user = User::find($request->id);
        $user->fname=$request->fname;
        $user->lname=$request->lname;
        $user->role=$request->role;
        $user->joining=$request->joining;
        $user->email=$request->email;
        $user->desination=$request->designation;
        $user->department=$request->department;
        $user->password=Hash::make($request->password);
        $user->save();
        dd($request->all());
        return response()->json(['success'=>'User updated successfully!','id'=>$user->id]);
    }
    public function create(){
        return view("admin.users.create");
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
