<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index(){
        return view("admin.designations.index");
    }
    public function create(){
        return view("admin.designations.create");
    }
    public function edit(){
        return view("admin.designations.edit");
    }
    public function show(){
        return view("admin.designations.show");
    }
}
