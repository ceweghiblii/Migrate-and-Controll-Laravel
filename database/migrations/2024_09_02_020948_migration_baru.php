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
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nim', 20)->unique();
            $table->string('jurusan', 50);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->decimal('ipk', 3, 2)->default(0.00);
            $table->timestamps();
        });
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nip', 20)->unique();
            $table->string('jurusan', 50);
            $table->string('email', 100)->unique();
            $table->decimal('gaji', 8, 2);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
        Schema::create('pengambilan_krs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa_id');
            $table->unsignedBigInteger('dosen_id');
            $table->string('mata_kuliah', 100);
            $table->integer('semester');
            $table->dateTime('tanggal_pengambilan');
            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade');
            $table->foreign('dosen_id')->references('id')->on('dosen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
