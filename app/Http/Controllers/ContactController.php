<?php

namespace App\Http\Controllers;

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
