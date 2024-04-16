<?php

namespace App\Http\Controllers;

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
    public function upadte(){
        return view('admin.test.update');
    }

}
