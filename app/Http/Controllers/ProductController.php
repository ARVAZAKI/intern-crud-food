<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(){
        $produk = Product::get();
        return view('dashboard', compact('produk'));
    }
    public function addProduct(){
        $produk = Product::get();
        return view('addproduct',compact('produk'));
    }
    public function postProduct(Request $request){
        $validasi = Validator::make($request->all(),[
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'deskripsi_produk' => 'required',
            'foto_produk' => 'required|image|mimes:jpeg,png,jpg',
            'category' => 'required',
        ]);
        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }
        $imageName = '';
        if($request->file('foto_produk')){
            $extension = $request->file('foto_produk')->getClientOriginalExtension();
            $imageName = $request->nama_produk . '.' . $extension;
            $request->file('foto_produk')->storeAs('photo', $imageName);
        }
        Product::create([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'foto_produk' => $imageName,
            'category' => $request->category
        ]);
        return redirect('/')->with('message','berhasil menambah produk...');
    }
    public function deleteProduct($id){
        $produk = Product::findOrFail($id);
        $produk->delete();
        return redirect()->back()->with('message','berhasil menghapus produk...');
    }
    public function editProduct($id){
        $produk = Product::findOrFail($id);
        return view('editproduct', compact('produk'));
    }
    public function updateProduct(Request $request, $id){
        $produk = Product::findOrFail($id);
        $imageName = '';
        if($request->file('foto_produk')){
            $extension = $request->file('foto_produk')->getClientOriginalExtension();
            $imageName = $request->nama_produk . '.' . $extension;
            $request->file('foto_produk')->storeAs('photo', $imageName);
        }
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'foto_produk' => $imageName,
            'category' => $request->category
        ]);
        return redirect('/')->with('message','berhasil mengedit produk...');
    }   
    public function detailProduct($id){
        $produk = Product::findOrFail($id);
        return view('detailproduct', compact('produk'));
    }

}
