<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view("admin.customers.index");
    }
    public function edit(){
        return view("admin.customers.edit");
    }
    public function update(){
        return view("admin.customers.update");
    }
    public function show(){
        return view("admin.customers.show");
    }
    public function create(){
        return view("admin.customers.create");
    }
}
