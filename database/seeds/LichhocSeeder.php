<?php

use Illuminate\Database\Seeder;
use App\Lichhoc;
class LichhocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lichhoc::create([
            'idMonhoc' => 1,
            'idGiohoc' => 1,
            'idPhonghoc' => 1,
        ]);

        Lichhoc::create([
            'idMonhoc' => 2,
            'idGiohoc' => 2,
            'idPhonghoc' => 1
        ]);
    }
}
