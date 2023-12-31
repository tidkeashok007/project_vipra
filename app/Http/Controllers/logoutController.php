<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class logoutController extends Controller
{
    public function logout()
    {
      Auth::logout();
      // Additional logout logic if needed
      return redirect('/login');
    }
}
