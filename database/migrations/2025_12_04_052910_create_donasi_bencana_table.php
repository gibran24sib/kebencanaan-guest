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
        Schema::create('donasi_bencana', function (Blueprint $table) {
            $table->id('donasi_id');
            $table->unsignedBigInteger('kejadian_id');

            $table->string('donatur_name');
            $table->string('jenis');
            $table->decimal('nilai', 12, 2);

            $table->timestamps();

            // Foreign key
            $table->foreign('kejadian_id')
                  ->references('kejadian_id')
                  ->on('kejadian_bencana')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasi_bencana');
    }
};
