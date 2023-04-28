<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\Size;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //On récupère tous les Products
        //$products = Product::all();
        $products = Product::with('categorie')->get();
        // On transmet les Products à la vue
        return view("back.products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $sizes = Size::all();
        return view("back.products.create", compact("categories", "sizes"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
        if($request){
            $fisrtun = Product::where('name', $request->name)->first();
            if($fisrtun){
                return Redirect::back()->withErrors("error, ce produit a déja été enregistré.");
            }else{
                $file = $request->file('picture');
                if( $file->getClientOriginalExtension() != 'jpg' &&  $file->getClientOriginalExtension() != 'jpeg' &&  $file->getClientOriginalExtension() != 'png' ){
                    return Redirect::back()->withErrors("error, verifier l'extention de l'image s'il vous plait.");
                }else{
                    // creation de dossier de stockage de l'image et renommage de l'image
                    $path = 'imageProduits';
                    $filename = date('YmdHi').".".$file->getClientOriginalExtension();
                    $file->move($path, $filename);

                    // enregistrement des donnees du produit
                    $add = new Product();
                    $add->name = ucfirst($request->name);
                    $add->description = $request->description;
                    $add->price = $request->price;
                    $add->reference = $request->reference;
                    $add->picture = $filename;
                    $add->visibility = $request->visibility;
                    $add->state = $request->state;
                    $add->category_id = $request->category_id;
                    //$category = Category::find($request->category_id);
                    //$add->categorie()->associate($category);

                    if($add->save() == true){
                        $donnee = $request->size_id;
                        for ($i = 0; $i < count($donnee); $i++) {
                            $add_prodsize = new ProductSize();
                            $add_prodsize->product_id = $add->id;
                            $add_prodsize->size_id = $donnee[$i];
                            $add_prodsize->save();
                        }

                        return Redirect::back()->withSuccess("Produit : ".$request->name." enregistré avec succès.");

                    }else{

                        return Redirect::back()->withErrors("Échec.");

                    }
                }
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $categories = Category::all();
        $sizes = Size::all();
        return view("back.products.edit", compact("categories", "sizes"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $sizes = Size::all();
        $editProduit = Product::where('id', $id)->first();
        return view("back.products.edit", compact("categories", "sizes", "editProduit"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
