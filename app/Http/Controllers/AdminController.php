<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admindashboard()
    {
        return view('admin.admindashboard');
    }

    public function admin_contact()
    {
        return view('admin.admin_contact');
    }

    public function admin_profile()
    {
        return view('admin.admin_profile');
    }

}
