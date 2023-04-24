<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductControllerWeb extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('modules.product.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('modules.product.products.action.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required',
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'buyingPrice' => 'required',
            'basePrice' => 'required',
            'finalPrice' => 'required',
        ]);

        $photoName = $request->photo->getClientOriginalName();
        $photoPath = $request->photo->storeAs('public/images', $photoName);
        Product::create([
            'product_img' => $photoName,
            'product_name' => $request->name,
            'category_id' => $request->category,
            'description' => $request->description,
            'product_stock' => $request->stock,
            'product_sold' => 0,
            'buying_price' => $request->buyingPrice,
            'base_price' => $request->basePrice,
            'final_price' => $request->finalPrice,
        ]);
        return redirect('product')->with('success', 'Data successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::where('id', $id)->first();
        $categories = Category::all();
        return view('modules.product.products.action.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'photo' => 'required',
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'buyingPrice' => 'required',
            'basePrice' => 'required',
            'finalPrice' => 'required',
        ]);
        $productGet =  Product::where('id', $id)->first();
        Storage::delete('public/images/' . $productGet->photo);
        $photoName = $request->photo->getClientOriginalName();
        $photoPath = $request->photo->storeAs('public/images', $photoName);
        Product::where('id', $id)->update([
            'product_img' => $photoName,
            'product_name' => $request->name,
            'category_id' => $request->category,
            'description' => $request->description,
            'product_stock' => $request->stock,
            'product_sold' => $productGet->product_sold,
            'buying_price' => $request->buyingPrice,
            'base_price' => $request->basePrice,
            'final_price' => $request->finalPrice,
        ]);
        return redirect()->route('product.index')->with('success', 'Data successfully changed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product =  Product::where('id', $id);
        $productGet =  $product->first();
        Storage::delete('public/images/' . $productGet->foto);
        $productDelete = $product->delete();
        return redirect('product')->with('success', 'Data successfully deleted!');
    }
}
