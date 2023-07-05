<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;

class AdminController extends Controller
{
    public function admindashboard()
    {
        return view('admindashboard.admindashboard');
    }

    public function admin_contact()
    {
        $contacts = Contact::all();
        return view('admindashboard.admin_contact',['contacts' => $contacts]);
    }

    public function admin_profile()
    {
        return view('admindashboard.admin_profile');
    }

    public function admin_users()
    {
        $users = User::all();
        return view('admindashboard.admin_users',['users' => $users]);
    }

}
