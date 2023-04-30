<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /*
     * Controlleur de la page d'accueil du site
     * toutes les fonctions existante concerne les menus des pages et les actions de l'accueil
     */


    // Afficher la page de l'accueil du site, ainsi que ses donnees
    public function home(){
        $products = Product::orderBy('id', 'DESC')->paginate(6);
        return view('front.home.index', compact('products'));
    }

    // Afficher le detail d'un produit
    public function detailProduit($idProduit){
        // liste des tailles a envoyer a la vue
        $sizes = Size::all();

        // requete pour recuperer les details du produit par l'id
        $detailP = Product::where('id', $idProduit)->first();
        return view('front.detailProduit.detail', compact('detailP', 'sizes'));
    }

    public function productsSolde(){
            // requete de recuperation des produits en solde
            $listeProduit = Product::where('state', "En solde")->orderBy('id', 'DESC')->paginate(6);
            $nbre = Product::where('state', "En solde")->count();
            return view('front.produit.solde', compact('listeProduit', 'nbre'));
    }

    public function productsHommes(){
            // requete de recuperation de l'Id de la categorie
            $categorie = Category::where('name', "Hommes")->first();
            //  requete de la liste des produits hommes
            $listeProduit = Product::where('categoryId', $categorie->id)->orderBy('id', 'DESC')->paginate(6);
            $nbre = Product::where('categoryId', $categorie->id)->count();
            return view('front.produit.homme', compact('listeProduit', 'nbre'));
    }
    public function productsFemmes(){
            // requete de recuperation de l'Id de la categorie
            $categorie = Category::where('name', "Femmes")->first();
            //  requete de la liste des produits Femmes
            $listeProduit = Product::where('categoryId', $categorie->id)->orderBy('id', 'DESC')->paginate(6);
            $nbre = Product::where('categoryId', $categorie->id)->count();
            return view('front.produit.femme', compact('listeProduit', 'nbre'));
    }

}
