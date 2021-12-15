<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestApiController extends Controller
{
    public function index()
    {
    	return 'Api Return';
    }
}
