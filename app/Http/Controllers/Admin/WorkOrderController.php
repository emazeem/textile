<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkOrderController extends Controller
{
    public function index(){
        return view("admin.work-orders.index");
    }
    public function create(){
        return view("admin.work-orders.create");
    }
    public function edit(){
        return view("admin.work-orders.edit");
    }
}
