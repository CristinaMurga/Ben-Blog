<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivewireController extends Controller
{
    public function counter()
    {
        return view('pages.counter');
    }

    public function adminUsers()
    {
        return view('admin.users');
    }
}
