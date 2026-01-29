<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();

        return view('produits.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();

        return view('produits.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'price' => 'required|min:0',
            'image' => 'nullable',
            'categorie_id' => 'required|exists:categories,id'
        ]);
        
        

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('produits', 'public');
        }

        $data['user_id'] = 2;
        Produit::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        $produit = $produit->load('categorie');

        return view('produits.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        $produit = $produit->load('categorie');
        $categories = Categorie::all();
        return view('produits.edit', compact('produit','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        $data = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'price' => 'required|min:0',
            'image' => 'nullable',
            'categorie_id' => 'required|exists:categories,id'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('produits', 'public');
        }

        $data['user_id'] = 2;
        $produit->update($data);

        return redirect()->route('produits.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index')->with('success', 'produit deleted successfully');;
    }
}
