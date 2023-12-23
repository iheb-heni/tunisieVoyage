<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declaration extends Model
{
    use HasFactory;
     
    protected $table = 'declaration'; // Ajoutez cette ligne pour spécifier le nom de la table

    protected $guarded = ['id'];

}
