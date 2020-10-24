<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class ProfilesController extends Controller
{
    public function index($user)
    {
        $result = User::findOrFail($user);
        return view('home', [
            'user' => $result
        ]);
    }
}
