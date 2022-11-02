<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function index(){
        //Ambil data
        $data = Produk::all();
        return view('menu', compact('data'));
    }
}
