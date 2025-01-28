<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Nom de la table
    protected $table = 'products'; // Assure-toi que le nom de la table correspond bien à celle dans ta base de données

    // Colonnes remplissables
    protected $fillable = ['name', 'price', 'stock_quantity', 'category_id'];

    /**
     * Relation avec Category
     * Un produit appartient à une catégorie.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
