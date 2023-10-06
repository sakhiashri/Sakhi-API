<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Buku;
use App\Models\Petugas;
use App\Models\Rak;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Anggota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            "kode_anggota" => "123456789",
            "nama_anggota" => "I Full",
            "jk_anggota" => "L",
            "jurusan_anggota" => "AK",
            "no_telp_anggota" => "08999999",
            "alamat_anggota" => "Kalimalang",
        ]);

        Anggota::create([
            "kode_anggota" => "987623321",
            "nama_anggota" => "Nipon Pain",
            "jk_anggota" => "L",
            "jurusan_anggota" => "RP",
            "no_telp_anggota" => "0815157345",
            "alamat_anggota" => "Bonas",
        ]);

        Petugas::create([
            "nama_petugas" => "Raya",
            "jabatan_petugas" => "Admin 1",
            "no_telp_petugas" => "0815625734",
            "alamat_petugas" => "Condet",
        ]);

        Petugas::create([
            "nama_petugas" => "Sakhi Ashari",
            "jabatan_petugas" => "Admin 2",
            "no_telp_petugas" => "0841242748",
            "alamat_petugas" => "Kampung Dukuh",
        ]);

        Buku::create([
            "kode_buku" => "12345",
            "judul_buku" => "Malam Pertama Dikubur",
            "penulis_buku" => "Ferdi",
            "penerbit_buku" => "Gramedia",
            "tahun_penerbit" => "2010",
            "stok" => 30,
           ]);
    
           Buku::create([
            "kode_buku" => "54321",
            "judul_buku" => "Tutorial Makan",
            "penulis_buku" => "Prof. Syaiful",
            "penerbit_buku" => "PT Laksa",
            "tahun_penerbit" => "2021",
            "stok" => 22,
           ]);

           Rak::create([
            "nama_rak" => "Tokoh",
            "lokasi_rak" => "lt-2",
            "buku_id" => 1,
          ]);
   
        
          Rak::create([
           "nama_rak" => "Resep",
           "lokasi_rak" => "lt-1",
           "buku_id" => 2,
            ]);
   
         Peminjaman::create([
           "tanggal_pinjam" => "2023-10-02",
           "tanggal_kembali" => "2023-10-07",
           "buku_id" => 1,
           "anggota_id" => 1,
           "petugas_id" => 1,
         ]);
   
         Peminjaman::create([
           "tanggal_pinjam" => "2023-10-01",
           "tanggal_kembali" => "2023-10-04",
           "buku_id" => 2,
           "anggota_id" => 2,
           "petugas_id" => 2,
         ]);
   
         Pengembalian::create([
            "tanggal_pengembalian" => "2023-10-08",
            "denda" => 35000,
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 1
         ]);
   
         Pengembalian::create([
           "tanggal_pengembalian" => "2023-10-04",
           "denda" => 0,
           "buku_id" => 2,
           "anggota_id" => 2,
           "petugas_id" => 2
        ]);
    }
}
