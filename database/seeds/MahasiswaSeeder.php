<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('mahasiswa')->delete();
      Mahasiswa::create(array(
        'nama' => 'Ahmad Fauzi',
        'npm' => '2011500504',
        'fakultas_id' => '1',
        'prodi_id' => '1',
        'alamat' => 'Depok',
        'telp' => '0123456789'
      ));
    }
}
