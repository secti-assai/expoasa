<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipe;
use App\Models\Cidade;
use Illuminate\Support\Str;

class EquipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $equipe_id = 1;
        
        $cidades = Cidade::where('nome', '!=', 'Administrador')->get();
        
        foreach($cidades as $cidade) {
            foreach($cidade->modalidades as $modalidade) {
                Equipe::create([
                    'cidade_id' => $cidade->id,
                    'nome' => $this->getNomeEquipePorModalidade($cidade, $modalidade),
                    'modalidade' => $modalidade,
                    'instituicao' => $this->getInstituicaoAleatoria(),
                    'responsavel_nome' => $cidade->representante_nome ?? 'Responsável Padrão',
                    'responsavel_email' => $cidade->representante_email ?? 'email@example.com',
                    'responsavel_telefone' => $cidade->representante_telefone ?? '(00) 00000-0000',
                    'equipe_id' => $equipe_id++,
                ]);
            }
        }
    }
    
    /**
     * Retorna um nome amigável para a equipe baseado na modalidade
     */
    private function getNomeEquipePorModalidade($cidade, $modalidade)
    {
        $nomesPorModalidade = [
            'educacao_especial' => 'INSPIRA',
            'fundamental_1' => 'BRINCA',
            'fundamental_2' => 'IMAGINA',
            'medio_tecnico' => 'CRIA',
            'superior' => 'AVANÇA'
        ];
        
        $modalidadeNome = $nomesPorModalidade[$modalidade] ?? ucfirst(str_replace('_', ' ', $modalidade));
        
        return $cidade->nome . ' - ' . $modalidadeNome;
    }
    
    /**
     * Retorna uma instituição aleatória para a equipe
     */
    private function getInstituicaoAleatoria()
    {
        $instituicoes = [
            'Escola Municipal João da Silva',
            'Colégio Estadual Maria Oliveira',
            'Instituto Federal de Educação',
            'Universidade Estadual do Paraná',
            'Escola Técnica Pedro Santos',
            'Centro de Educação Profissional',
            'Colégio Aplicação',
            'Escola de Artes e Tecnologia',
            'APAE',
            'Centro de Educação Especial'
        ];
        
        return $instituicoes[array_rand($instituicoes)];
    }
}