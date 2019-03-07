<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    public function store()
    {
        if (! auth()->attempt(request(['email','password']))) return back();

        return redirect()->home();
    }
}