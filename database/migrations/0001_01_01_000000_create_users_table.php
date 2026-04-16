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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'siswa'])->default('siswa');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nip', 10)->unique();
            $table->timestamps();
        });

        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori', 30)->unique();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });

        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nisn', 10)->unique();
            $table->string('kelas', 10);
            $table->timestamps();
        });

        Schema::create('input_aspirasis', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 10);
            $table->string('judul', 100);
            $table->foreignId('kategori_id')->constrained()->onDelete('cascade');
            $table->string('foto')->nullable();
            $table->enum('status', ['menunggu', 'proses', 'selesai'])->default('menunggu');
            $table->string('lokasi');
            $table->string('ket')->nullable();
            $table->timestamps();

            $table->foreign('nisn')->references('nisn')->on('siswas')->onDelete('cascade');
        });

        Schema::create('aspirasis', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 10);
            $table->foreignId('input_aspirasi_id')->constrained()->onDelete('cascade');
            $table->string('deskripsi');
            $table->string('foto')->nullable();
            $table->enum('status', ['menunggu', 'proses', 'selesai'])->default('proses');
            $table->timestamps();

            $table->foreign('nip')->references('nip')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('admins');
        Schema::dropIfExists('kategoris');
        Schema::dropIfExists('siswas');
        Schema::dropIfExists('input_aspirasis');
        Schema::dropIfExists('aspirasis');
    }
};
