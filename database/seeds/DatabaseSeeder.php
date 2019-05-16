<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);

        $this->call(MonhocSeeder::class);

        $this->call(GiohocSeeder::class);

        $this->call(PhonghocSeeder::class);

        $this->call(LichhocSeeder::class);
    }
}
