<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(){
        return view("admin.permissions.index");
    }
    public function create(){
        return view("admin.permissions.create");
    }
    public function edit(){
        return view("admin.permissions.edit");
    }
    public function show(){
        return view("admin.permissions.show");
    }
}