<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientUserController extends Controller
{
    public function index()
    {
    	return view('client-user.index');
    }
}
