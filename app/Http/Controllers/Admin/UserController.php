<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;
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
    public function edit(){
        return view("admin.users.edit");
    }
    public function create(){
        return view("admin.users.create");
    }
}
