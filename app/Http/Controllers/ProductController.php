<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('product.index', compact(['products', 'categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request)
    {
        // Validate the request...
        $validated = $request->validated();
        Product::create([
            'name' => $validated['name'],
            'price_normal' => $validated['price_normal'],
            'price_big' => $validated['price_big'] ?? null,
            'category_id' => $validated['category_id'],
        ]);

        return redirect()->route('product.index')->with('success', 'Produit ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // cheking if the user can update the product
        $this->authorize('update', $product);

        $categories = Category::all();
        return view('product.edit', compact(['product', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFormRequest $request, Product $product)
    {
        // cheking if the user can update the product
        $this->authorize('update', $product);

        // Validate the request...
        $validated = $request->validated();

        // Update the product
        $product->update($validated);

        return back()->with('edit-success', 'Produit modifié avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Produit supprimé avec succès!');
    }
}