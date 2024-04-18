<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view("admin.departments.index");
    }
    public function create(){
        return view("admin.departments.create");
    }
    public function edit(){
        return view("admin.departments.edit");
    }
    public function show(){
        return view("admin.departments.show");
    }
}
