<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cidade;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CidadesAdicionaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cidades = [
            // Categoria 1
            [
                'nome' => 'Assaí',
                'estado' => 'PR',
                'distancia_categoria' => 1,
                'senha' => 'assai123',
            ],
            [
                'nome' => 'Uraí',
                'estado' => 'PR',
                'distancia_categoria' => 1,
                'senha' => 'urai123',
            ],
            [
                'nome' => 'Santa Cecília do Pavão',
                'estado' => 'PR',
                'distancia_categoria' => 1,
                'senha' => 'santaceciliadopavao123',
            ],
            [
                'nome' => 'Nova Santa Bárbara',
                'estado' => 'PR',
                'distancia_categoria' => 1,
                'senha' => 'novasantabarbara123',
            ],
            [
                'nome' => 'São Sebastião da Amoreira',
                'estado' => 'PR',
                'distancia_categoria' => 1,
                'senha' => 'saosebastiaodaamoreira123',
            ],
            
            // Categoria 2
            [
                'nome' => 'São Jerônimo da Serra',
                'estado' => 'PR',
                'distancia_categoria' => 2,
                'senha' => 'saojeronimodaserra123',
            ],
            [
                'nome' => 'Nova América da Colina',
                'estado' => 'PR',
                'distancia_categoria' => 2,
                'senha' => 'novaamericadacolina123',
            ],
            [
                'nome' => 'Cornélio Procópio',
                'estado' => 'PR',
                'distancia_categoria' => 2,
                'senha' => 'cornelioprocopio123',
            ],
            [
                'nome' => 'Santo Antônio do Paraíso',
                'estado' => 'PR',
                'distancia_categoria' => 2,
                'senha' => 'santoantoniodoparaiso123',
            ],
            
            // Categoria 3
            [
                'nome' => 'Leópolis',
                'estado' => 'PR',
                'distancia_categoria' => 3,
                'senha' => 'leopolis123',
            ],
            [
                'nome' => 'Santa Mariana',
                'estado' => 'PR',
                'distancia_categoria' => 3,
                'senha' => 'santamariana123',
            ],
            [
                'nome' => 'Nova Fátima',
                'estado' => 'PR',
                'distancia_categoria' => 3,
                'senha' => 'novafatima123',
            ],
            [
                'nome' => 'Sapopema',
                'estado' => 'PR',
                'distancia_categoria' => 3,
                'senha' => 'sapopema123',
            ],
            [
                'nome' => 'Rancho Alegre',
                'estado' => 'PR',
                'distancia_categoria' => 3,
                'senha' => 'ranchoalegre123',
            ],
            [
                'nome' => 'Sertaneja',
                'estado' => 'PR',
                'distancia_categoria' => 3,
                'senha' => 'sertaneja123',
            ],
            [
                'nome' => 'Bandeirantes',
                'estado' => 'PR',
                'distancia_categoria' => 3,
                'senha' => 'bandeirantes123',
            ],
        ];

        // Todas as modalidades disponíveis por padrão
        $todasModalidades = [
            'educacao_especial', 
            'fundamental_1', 
            'fundamental_2', 
            'medio_tecnico', 
            'superior'
        ];

        foreach ($cidades as $cidadeData) {
            Cidade::create([
                'nome' => $cidadeData['nome'],
                'estado' => $cidadeData['estado'],
                'distancia_categoria' => $cidadeData['distancia_categoria'],
                'senha' => Hash::make($cidadeData['senha']),
                'hash_id' => Str::uuid(),
                'treinamento_requerido' => true,
                'modalidades' => $todasModalidades // Atribuir todas as modalidades por padrão
            ]);
        }
    }
}