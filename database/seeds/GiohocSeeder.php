<?php

use Illuminate\Database\Seeder;
use App\Giohoc;
class GiohocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Giohoc::create([
            'day' => 'T2',
            'time' => '07:00',
        ]);
        Giohoc::create([
            'day' => 'T2',
            'time' => '09:00',
        ]);
        Giohoc::create([
            'day' => 'T2',
            'time' => '12:00',
        ]);
        Giohoc::create([
            'day' => 'T2',
            'time' => '14:00',
        ]);
    }
}
