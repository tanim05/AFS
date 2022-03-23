<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
     /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform()
    {
        //Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}
