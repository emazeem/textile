<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit(){
        return view("admin.contacts.edit");
    }
    public function delete(){
        return view("");
    }
}
