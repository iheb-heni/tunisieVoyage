<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }
    
    // UserController.php
    public function destroy(){
        
        return view('users.index');


    }

}