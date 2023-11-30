<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pideo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_pideo',50);
            $table->longText('deskripsi_pideo');
            $table->string('foto_pideo')-> default('null');;
            $table->string('pideo')-> default('null');;
            
            
        });
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('count')-> default(0);;
        });
    }
    // protected $fillable = ['nama_video','deskripsi_video','foto_video','video'];

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video');
    }
};
