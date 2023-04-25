<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryControllerWeb extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('modules.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules.category.action.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required',
            'name' => 'required',
        ]);

        $photoName = $request->photo->getClientOriginalName();
        $photoPath = $request->photo->storeAs('public/images', $photoName);
        Category::create([
            'category_image' => $photoName,
            'category_name' => $request->name,
        ]);
        return redirect('category')->with('success', 'Data successfully created!');
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
        $category = Category::where('id', $id)->first();
        return view('modules.category.action.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'photo' => 'required',
            'name' => 'required',
        ]);
        $categoryGet =  Category::where('id', $id)->first();
        Storage::delete('public/images/' . $categoryGet->photo);
        $photoName = $request->photo->getClientOriginalName();
        $photoPath = $request->photo->storeAs('public/images', $photoName);
        Category::where('id', $id)->update([
            'category_image' => $photoName,
            'category_name' => $request->name,
        ]);
        return redirect()->route('category.index')->with('success', 'Data successfully changed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category =  Category::where('id', $id);
        $categoryGet =  $category->first();
        // Storage::delete('public/images/' . $userGet->foto);
        $categoryDelete = $category->delete();
        return redirect('category')->with('success', 'Data successfully deleted!');
        //
    }
}
