<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $keyword = $request->query('keyword', '');

        $brands = Brand::where('brand_name', 'like', "%{$keyword}%")
            ->orderBy('brand_name', 'desc')
            ->paginate(10);

        return response()->json($brands);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'brand_name' => 'required|string',
        ], [
            'brand_name.required' => 'Nama brand wajib diisi.',
        ]);
        Brand::create($request->all());
        return response()->json(['message' => 'Brand berhasil disimpan'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $brands = Brand::findOrFail($id);
        return response()->json($brands);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'brand_name' => 'required',
        ]);
        $brand = Brand::findOrFail($id);
        $brand->update($request->all());
        return response()->json(['message' => 'Brand berhasil diupdate'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $brand = Brand::findOrFail($id);

        $brand->delete();
        return response()->json(['message' => 'Brand berhasil dihapus']);
    }
}
