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
        //invocando todos os Seeders em um array
        $this->call([SubjectSeeder::class, UserSeeder::class]);
    }
}
