<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit(){
        return view("admin.customers.edit_contact");
    }
    public function delete(){
        return view("admin.customers.delete_contact");
    }
}
