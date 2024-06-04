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
        Schema::create('paten', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users');
            $table->unsignedBigInteger('cek_id')->constrained('check_paten')->nullable();
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->date('tanggal_lahir');
            $table->string('ktp_inventor');
            $table->string('email');
            $table->string('kewarganegaraan');
            $table->integer('kode_pos');
            $table->string('institusi');
            $table->string('jurusan')->nullable();
            $table->string('prodi')->nullable();
            $table->string('jenis_paten');
            $table->string('judul_paten');
            $table->string('abstrak_paten');
            $table->string('deskripsi_paten');
            $table->string('pengalihan_hak');
            $table->string('klaim');
            $table->string('pernyataan_kepemilikan');
            $table->string('surat_kuasa');
            $table->string('gambar_paten');
            $table->string('gambar_tampilan');
            $table->date('tanggal_permohonan');
            $table->string('sertifikat_paten')->nullable();
            $table->string('status')->default('Menunggu Tanggapan Substansif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paten');
    }
};
