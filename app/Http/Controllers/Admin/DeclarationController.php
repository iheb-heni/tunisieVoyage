<?php

namespace App\Http\Controllers\Admin;

use App\Models\Declaration;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;




class DeclarationController extends Controller
{
   
        public function index()
        {
            $declarations = declaration::paginate(10);
    
            return view('admin.declaration.index', compact('declarations'));
        }
    

    // Ajoutez cette méthode pour afficher le formulaire

    public function destroy(Declaration $declaration)
    {
        $declaration->delete();

        return redirect()->back()->with([
            'message' => 'declaration suprimée !',
            'alert-type' => 'danger'
        ]);    }
}

