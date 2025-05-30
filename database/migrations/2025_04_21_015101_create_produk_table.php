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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table -> string("nama_produk");
            $table -> string("deskripsi");
            $table -> string("harga");
            $table -> string("stok");
            $table -> string("nama_file");
            $table -> foreignId("kategori_id")->constrained('kategori')
            ->onUpdate("cascade")->onDelete("restrict");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
