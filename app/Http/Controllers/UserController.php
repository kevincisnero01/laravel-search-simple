<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $bio = $request->get('bio');

        $users = User::orderBy('id','DESC')
        ->name($name)
        ->email($email)
        ->bio($bio)
        ->paginate(10);


        return view('users',[
            'users' => $users,
            'name' => $name,
            'email' => $email,
            'bio' => $bio
        ]);


    }

}
