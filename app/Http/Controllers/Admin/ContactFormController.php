<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactFormController extends Controller
{
    public function contact_form(){
        $data=Contact::all();
        return view('admin.contact_form.list',compact('data'));
    }
}
