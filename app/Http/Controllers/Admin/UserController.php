<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('admin.users.index', compact('users'));
    }
    
    public function destroy(user $user)
    {
        $user->delete();

        return redirect()->back()->with([
            'message' => 'utilisateure suprimer !',
            'alert-type' => 'danger'
        ]);
    }
}

