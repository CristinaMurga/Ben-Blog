<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function home()
    {
        return view('account.home');
    }
}
