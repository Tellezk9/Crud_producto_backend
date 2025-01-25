<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        return Product::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $producto = Product::findOrFail($id);
        return $producto;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $producto = Product::findOrFail($id);
        $producto->update($request->all());

        return response()->json($producto, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $producto = Product::findOrFail($id);
        $producto->delete();
        return response()->json(null, 204);
    }
}
