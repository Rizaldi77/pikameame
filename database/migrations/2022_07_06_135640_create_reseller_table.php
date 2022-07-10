<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResellerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseller', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id');
            $table->string('nama_lengkap',255);
            $table->string('no_hp',15);
            $table->text('domisili');
            $table->string('akun_ig',255);
            $table->string('email',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseller');
    }
}
