<?php

use Illuminate\Database\Seeder;
use App\Monhoc;
class MonhocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Monhoc::create([
            'tenMonhoc' => 'Xây dựng các hệ thống nhúng',
        ]);

        Monhoc::create([
            'tenMonhoc' => 'Lập trình C/C++',
        ]);
    }
}
