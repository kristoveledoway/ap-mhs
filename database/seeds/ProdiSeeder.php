<?php

use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('prodi')->delete();
      DB::table('prodi')->insert(
        [
          'prodi' => 'Teknik Komputer'
        ]
      );
    }
}
