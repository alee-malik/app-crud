<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers; //pre built authentication functions

    protected $redirectTo = '/product'; //after login goto product page


    public function __construct()
    {
        $this->middleware('guest')->except('logout'); //only logout users can access
    }

   
    
}
