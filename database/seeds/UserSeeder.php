<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'uid' => '12345',
            'name' => 'Nguyễn Văn A',
            'MASV' => 'B15DCCN123'
        ]);

        User::create([
            'uid' => '12346',
            'name' => 'Nguyễn Văn B',
            'MASV' => 'B15DCCN124'
        ]);
    }
}
