<?php

namespace App\Http\Controllers;

use App\Models\Products_Lazada;
use Illuminate\Http\Request;

class ProductsLazadaController extends Controller
{
    public function index()
    {
        $products = Products_Lazada::all();
        return response()->json($products);
    }

    public function show($id)
    {
        $product = Products_Lazada::findOrFail($id);
        return response()->json($product);
    }

    public function create()
    {
        // Logic for displaying create form
    }

    public function store(Request $request)
    {
        $product = new Products_Lazada();
        $product->image = $request->input('image');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->show_owner = $request->input('show_owner');
        $product->save();

        return response()->json($product, 201);
    }

    public function edit($id)
    {
        $product = Products_Lazada::findOrFail($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product = Products_Lazada::findOrFail($id);
        $product->image = $request->input('image');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->show_owner = $request->input('show_owner');
        $product->save();

        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Products_Lazada::findOrFail($id);
        $product->delete();

        return response()->json(null, 204);
    }
}
