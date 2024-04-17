<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('admin.tests.index');
    }
    
    public function edit(){
        return view('admin.tests.edit');
    }
    public function show(){
        return view('admin.tests.show');
    }
    public function update(){
        return view('admin.tests.update');
    }
    public function create(){
        return view('admin.tests.create');
    }

}
