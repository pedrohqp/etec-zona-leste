<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Cria o usuário administrador
        DB::table('users')->insert([
            'name'       => 'Administrador',
            'email'      => 'admin@etec.com.br',
            'password'   => Hash::make('admin123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insere cursos de exemplo
        $cursos = [
            ['nome' => 'Técnico em Informática',                 'area' => 'Tecnologia', 'turno' => 'Manhã',  'duracao' => '2 anos'],
            ['nome' => 'Técnico em Administração',               'area' => 'Negócios',   'turno' => 'Tarde',  'duracao' => '2 anos'],
            ['nome' => 'Técnico em Contabilidade',               'area' => 'Negócios',   'turno' => 'Noite',  'duracao' => '2 anos'],
            ['nome' => 'Técnico em Desenvolvimento de Sistemas', 'area' => 'Tecnologia', 'turno' => 'Noite',  'duracao' => '2 anos'],
            ['nome' => 'Técnico em Logística',                   'area' => 'Negócios',   'turno' => 'Manhã',  'duracao' => '1 ano e meio'],
            ['nome' => 'Técnico em Saúde Bucal',                 'area' => 'Saúde',      'turno' => 'Tarde',  'duracao' => '2 anos'],
        ];

        foreach ($cursos as $curso) {
            DB::table('cursos')->insert(array_merge($curso, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
