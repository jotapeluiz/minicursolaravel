<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Inserindo usuário de exemplo');
        /*
          usando uma factory para gerar um usuario com dados aleatorios usando Faker
          veja o arquivo database/factories/UserFactory.php
        */
        $user = factory(User::class)->make();
        $user->save();
    }
}
