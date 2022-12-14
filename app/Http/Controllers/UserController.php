<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('posts/users_index')->with([
            'posts' => $user->getByUser(),
            'user' => $user
            ]);
    }
}
