<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FireBaseOtpController extends Controller
{
    public function firebaseOtp()
    {
    	return view('firebase.firebase-opt');
    }
}
