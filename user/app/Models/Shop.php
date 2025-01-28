<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    // Assure-toi que le nom de la table est correct
    protected $table = 'shops'; // Utilise le même nom de table que dans la base de données

    // Si tu as des colonnes spécifiques à attribuer :
    protected $fillable = ['name']; // Liste des colonnes à remplir
}
