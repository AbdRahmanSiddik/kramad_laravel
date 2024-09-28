<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coffees = Coffee::getAllCoffees()->get();
        return view('admin.produk.produk', compact('coffees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk.add_produk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'netto' => 'required',
            'ingredients' => 'required'
        ]);

        $token = uniqid();
        $token_coffee = Str::random('15');
        $file = $request->file('picture');
        $name = $request->name;
        $price = $request->price;
        $stock = $request->stock;
        $netto = $request->netto;
        $ingredients = $request->ingredients;

        $file_name = $token . '.' . $file->getClientOriginalExtension();

        $data = [
            'token_coffee' => $token_coffee,
            'name' => $name,
            'price' => $price,
            'stock' => $stock,
            'netto' => $netto,
            'ingredients' => $ingredients,
            'picture' => $file_name
        ];

        $file->move('coffee', $file_name);
        Coffee::create($data);

        return redirect('/produk')->with(['success'=>'Produk Berhasil Ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show($coffee)
    {
        $produk = Coffee::getDetailProduk($coffee)->first();

        return view('admin.produk.detail_produk', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($coffee)
    {
        $produk = Coffee::getDetailProduk($coffee)->first();

        return view('admin.produk.edit_produk', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $coffee)
    {
        $produk = Coffee::getDetailProduk($coffee)->first();

        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'netto' => 'required',
            'ingredients' => 'required'
        ]);

        $token = uniqid();
        $token_coffee = Str::random('15');
        $file = $request->file('picture');
        $name = $request->name;
        $price = $request->price;
        $stock = $request->stock;
        $netto = $request->netto;
        $ingredients = $request->ingredients;

        try {
            $file_name = $token . '.' . $file->getClientOriginalExtension();
            $file->move('coffee', $file_name);

            File::delete('coffee/'.$produk->picture);
        } catch (\Throwable $th) {
            $file_name = $produk->picture;
        }

        $data = [
            'token_coffee' => $token_coffee,
            'name' => $name,
            'price' => $price,
            'stock' => $stock,
            'netto' => $netto,
            'ingredients' => $ingredients,
            'picture' => $file_name
        ];

        Coffee::where('token_coffee', $coffee)->update($data);

        return redirect('/produk')->with(['success'=>'Produk Berhasil Di Update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($coffee)
    {
        $file = Coffee::where('token_coffee', $coffee);
        $img = $file->first();

        File::delete('coffee/'.$img->picture );
        $file->delete();

        return redirect('/produk')->with(['success'=>'Produk Berhasil Di Hapus']);
    }
}
