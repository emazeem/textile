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
            'email'=>'required',
            'role'=>'required',
            'joining'=>'required',
        ],
        [
                'fname.required' => 'First Name is required *',
                'lname.required' => ' LastName is required *',
                'email.required' => ' Email is required *',
                'phone.required' => ' Phone is required *',
                'role.required' => ' Role is required *',
                'joining.required' => ' Joining date is required *',
        ]);
        $user = User::find($request->id);
        $user->role=$request->role;
        $user->fname=$request->fname;
        $user->lname=$request->lname;
        $user->joining=$request->joining;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->desination=$request->designation;
        $user->department=$request->department;
        $user->password=Hash::make($request->get('password'));
        $user->save();
        return redirect('admin.users.index')->with('success','');
    }
    public function create(){
        return view("admin.users.create");
    }
}
