<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomeLoginController extends Controller
{
    public function authenticate(){

    	$user = User::where('email', $request->auth)
                            ->orWhere('username', $request->auth)
                            ->orWhere('phone', $request->auth)
                            ->first();

            if ($user &&
                Hash::check($request->password, $user->password)) {


            	
                
            	return redirect('/dashboard');

                return $user;
            }
    }
}
