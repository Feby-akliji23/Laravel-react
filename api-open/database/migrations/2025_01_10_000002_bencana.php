<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bencana', function (Blueprint $table) {
            $table->id(); // Kolom id unsignedBigInteger
            $table->unsignedBigInteger('wilayah_id'); // Foreign key ke tabel wilayah
            $table->unsignedBigInteger('kib'); // Kode Identifikasi Bencana
            $table->string('kejadian'); // Nama kejadian bencana
            $table->text('detail'); // Detail kejadian
            $table->date('tanggal'); // Tanggal kejadian bencana
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->onUpdate(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('deleted_at')->nullable(); // Soft delete

            // Foreign key ke tabel wilayah
            $table->foreign('wilayah_id')->references('id')->on('wilayah')
                  ->onDelete('cascade') // Hapus bencana jika wilayah dihapus
                  ->onUpdate('cascade'); // Update foreign key jika id wilayah berubah
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bencana');
    }
};
