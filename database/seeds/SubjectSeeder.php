<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $descriptions = [
          'Informação',
          'Crítica',
          'Sugestão',
          'Pergunta',
          'Reclamação',
          'Outros'
        ];

        foreach ($descriptions as $description) {
          $this->command->info("Adicionando o assunto: $description");
          /*
             o metodo firstOrCreate ira tentar encontrar um registro no banco
             com o coluna description igual o valor da variavel $description
             caso nao encontre ele cria o mesmo na base de dados. Caso ja exista
             ele apenas retorna o registro. Ex.:

            $subject = Subject::firstOrCreate(['description' => $description]);
          */
          Subject::firstOrCreate(['description' => $description]);
        }
    }
}
