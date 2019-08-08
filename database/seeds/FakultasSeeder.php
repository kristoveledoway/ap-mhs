<?php

use Illuminate\Database\Seeder;
use App\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('fakultas')->delete();
      Fakultas::create(array(
        'fakultas' => 'Teknik Informatika'
      ));
    }
}
