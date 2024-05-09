<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KategoriProdukController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view('admin.KategoriProduk',compact('kategori'));
    }

    public function add(Request $request){
        $category = new Kategori();
        $category->nama_kategori = $request->nama_kategori;
        $category->save();
        return redirect()->route('xyars.kategori')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function delete($id)
    {
        $category = Kategori::findOrFail($id);
        $category->delete();
        return redirect()->route('xyars.kategori')->with('success', 'Kategori berhasil dihapus.');
    }

    public function update(Request $request, $id)
    {
        $category = Kategori::findOrFail($id);

        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();
        
        return response()->json(['message' => 'Kategori berhasil diperbarui'], 200);
    }
}
