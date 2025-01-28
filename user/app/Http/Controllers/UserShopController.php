<?php
namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Shop; 
use App\Models\Category;
use App\Models\Product;

class UserShopController extends Controller
{
    public function index()
    {
        // Récupérer toutes les boutiques
        $shops = Shop::all();

        // Vérifier si des boutiques sont récupérées
        if ($shops->isEmpty()) {
            dd('Aucune boutique trouvée');
        }

        // Passer les boutiques à la vue
        return view('home', compact('shops'));
    }

    public function cat() {
        $categories = \App\Models\Category::all(); // Assurez-vous que la table est correctement connectée au modèle
        return view('categories.index', compact('categories'));
    }
    public function prod(){
        $products = App\Models\Product::all();
        return view ('products.index',compact('products'));
    }
}



