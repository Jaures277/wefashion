<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //On récupère tous les Post
        $categories = Category::all();
        // On transmet les Post à la vue
        return view("back.categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("back.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $categories = Category::where('name', $input["name"])->firstOrCreate([
            'name' => ucfirst($input["name"]),
            'description' => $input["description"]
        ]);

        if($categories){
            return Redirect::back()->withSuccess("Categorie : ".strtoupper($input["name"])." enregistré avec succès.");
        }else{
            return Redirect::back()->withErrors("Échec.");
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //On récupère tous la categrie en fcnt de l'id
        $categorie = Category::first($id);
        // On transmet la categorie à la vue
        return view("back.categories.edit", compact("$categorie"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //On récupère tous la categrie en fcnt de l'id
        $categorie = Category::where('id', $id)->first();
        // On transmet la categorie à la vue
        return view("back.categories.edit", compact("categorie", "id"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //recuperation et verification tous la categrie en fcnt de l'id
        $categorie = Category::where('id', $request->idcategorie)->first();
        if($categorie){
            // recuperation et update de la Categorie
            $category = Category::find($request->idcategorie);
            $category->name = ucfirst($request->name);
            $category->description = $request->description;
            $category->save();

            return response()->redirectToRoute('categories.index');

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
