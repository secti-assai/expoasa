<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cidade;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CidadeTesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cidadeTeste = [
            'nome' => 'Cidade Teste',
            'estado' => 'PR',
            'distancia_categoria' => 1,
            'senha' => 'testecidade123',
        ];

        $modalidades = [
            'educacao_especial',
            'fundamental_1',
            'fundamental_2',
            'medio_tecnico',
            'superior'
        ];

        Cidade::create([
            'nome' => $cidadeTeste['nome'],
            'estado' => $cidadeTeste['estado'],
            'distancia_categoria' => $cidadeTeste['distancia_categoria'],
            'senha' => Hash::make($cidadeTeste['senha']),
            'hash_id' => Str::uuid(),
            'treinamento_requerido' => true,
            'modalidades' => $modalidades
        ]);
    }
}
