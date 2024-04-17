<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RangeController extends Controller
{
    public function index(){
        return view('admin.ranges.index');
    }
    public function create(){
        return view('admin.ranges.create');
    }
    public function show(){
        return view('admin.ranges.show');
    }
    public function edit(){
        return view('admin.ranges.edit');
    }
}
