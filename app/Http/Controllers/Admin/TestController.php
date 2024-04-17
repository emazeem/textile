<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('admin.test.index');
    }
    
    public function edit(){
        return view('admin.test.edit');
    }
    public function show(){
        return view('admin.test.show');
    }
    public function update(){
        return view('admin.test.update');
    }
    public function create(){
        return view('admin.test.create');
    }

}
