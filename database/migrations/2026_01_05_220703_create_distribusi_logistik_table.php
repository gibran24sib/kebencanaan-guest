<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('distribusi_logistik', function (Blueprint $table) {
            $table->id('distribusi_id');

            // FK ke logistik_bencana
            $table->unsignedBigInteger('logistik_id');

            // FK ke posko_bencana
            $table->unsignedBigInteger('posko_id');

            $table->date('tanggal');
            $table->integer('jumlah');
            $table->string('penerima');
            $table->string('bukti_distribusi')->nullable();

            $table->timestamps();

            // FOREIGN KEY KE LOGISTIK BENCANA (FIX)
            $table->foreign('logistik_id')
                ->references('logistik_id')
                ->on('logistik_bencana')
                ->onDelete('cascade');

            // FOREIGN KEY KE POSKO
            $table->foreign('posko_id')
                ->references('posko_id')
                ->on('posko_bencana')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('distribusi_logistik');
    }
};
