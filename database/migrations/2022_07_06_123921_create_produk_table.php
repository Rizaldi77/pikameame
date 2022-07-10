<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function(Blueprint $table){
            $table->id();
            $table->string('nama',255);
            $table->text('deskripsi');
            $table->foreignId('admin_id');
            $table->integer('jml_foto');
            $table->integer('jml_varian');
            $table->integer('jml_jual');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
