<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        $user ->name = $request->name;
        $user ->remember_token = $request->_token;
        $user ->email = $request->email;
        $user ->password = Hash::make($request->password);
        if($request->hasFile('avatar')){
            $filename ='users/'.time().'.'.$request->avatar->getClientOriginalExtension();
            $request->avatar->move('storage/users', $filename);
            $user->avatar=$filename;
        }
        $user->save();
        return redirect()->route('home');
    }
}
