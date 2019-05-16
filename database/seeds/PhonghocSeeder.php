<?php

use Illuminate\Database\Seeder;
use App\Phonghoc;
class PhonghocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phonghoc::create([
            'toa' => 'A2',
            'phong' => '201',
        ]);
    }
}
