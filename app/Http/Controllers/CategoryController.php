<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $keyword = $request->query('keyword', '');

        $categories = Category::where('category_name', 'like', "%{$keyword}%")
            ->orderBy('category_name', 'desc')
            ->paginate(10);

        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'category_name' => 'required|string',
        ], [
            'category_name.required' => 'Nama kategori wajib diisi.',
        ]);
        Category::create($request->all());
        return response()->json(['message' => 'Kategori berhasil disimpan'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $categories = Category::findOrFail($id);
        return response()->json($categories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'category_name' => 'required',
        ]);
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return response()->json(['message' => 'Kategori berhasil diupdate'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $category = Category::findOrFail($id);

        $category->delete();
        return response()->json(['message' => 'Kategori berhasil dihapus']);
    }
}
