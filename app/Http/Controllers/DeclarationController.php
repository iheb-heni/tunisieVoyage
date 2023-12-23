<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Declaration;
use App\Http\Requests\declarationrequest;

class DeclarationController extends Controller
{
    public function store(declarationRequest $request)
    {
        declaration::create($request->validated());

        return redirect()->back()->with([
            'message' => "merci pour votre message"
        ]);
    }

    
}
