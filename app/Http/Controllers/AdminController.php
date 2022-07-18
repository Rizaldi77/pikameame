<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dataproduk()
    {
    	$produk = DB::table('produk')->get();
 
    	return view('adminproduk',['produk' => $produk]);
 
    }
}
