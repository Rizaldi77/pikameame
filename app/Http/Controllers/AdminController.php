<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\List_varian;
use App\Models\List_foto;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function dataproduk()
    {
    	$produk = DB::table('produk')->get();
 
    	return view('adminproduk',['produk' => $produk]);
 
    }

    public function tambahproduk(Request $request){

        $this->validate($request, [
			'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
		]);
        $files = $request->file('foto');
        if($files){
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $filename = $filename.'_'.time().'.'.$extension;
                $extension = $file->getClientOriginalExtension();;
                
                foreach ($request->foto as $foto) {
                    $filename = $foto->storeAs('public/foto_produk', $filename);
            }
        }
        DB::table('produk')->insert([
            'nama' => $request->addNama,
            'deskripsi' => $request->deskripsi,
            'admin_id' => 1,
            'jml_foto' => 1,
            'jml_varian' => count($request->namaVarian),
            'jml_jual' => $request->jml_jual
        ]);

        $idproduk = DB::table('produk')->where('nama', $request->addNama)->value('id');
        for ($i = 1; $i < count($request->namaVarian); $i++) {
            $varian[] = [
                'produk_id' => $idproduk,
                'varian' => $request-> namaVarian[$i],
                'harga' => $request->harga[$i],
            ];
        }
        list_varian::insert($varian);

        // for ($j = 1; $j < count($request->foto); $j++) {
        //     $foto[] = [
        //         'id_varian' => $request-> namaVarian[$i],
        //     ];

        // }
    }
}
}