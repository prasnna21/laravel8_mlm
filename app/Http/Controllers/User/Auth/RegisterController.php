<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view ('auth.register');
    }

    public function search_sponsorid (Request $request)
    {
        $sponsor_id = $request->sponsor_id;
        echo " $sponsor_id";
        
       
       
    }

   
}
