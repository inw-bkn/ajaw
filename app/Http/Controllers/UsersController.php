<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function profile()
    {
        return Inertia::render('Users/Profile');
    }

    public function dashboard()
    {
        return Inertia::render('Users/Dashboard');
    }
}
