<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Material;

class MateriaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::create([
            'titulo' => 'Regulamento Oficial IDEASUN 2025',
            'descricao' => 'Regulamento completo com todas as regras da competição.',
            'url' => '/assets/materials/regulamento-ideasun-2025.pdf',
            'categoria' => 'guia',
            'tags' => 'regras,oficial,regulamento',
            'ativo' => true,
            'ordem' => 1
        ]);

        Material::create([
            'titulo' => 'Declaração de Desistência',
            'descricao' => 'Documento utilizado para formalizar a decisão de uma pessoa em desistir voluntariamente de sua participação na Ideasun 2025.',
            'url' => '/assets/materials/DECLARACAO_DE_DESISTENCIA.pdf',
            'categoria' => 'template',
            'tags' => 'desistência,documentos',
            'ativo' => true,
            'ordem' => 2
        ]);

        Material::create([
            'titulo' => 'Termo de Aceite de Participação (maiores de 18 anos)',
            'descricao' => 'Documento que tem por objetivo registrar a concordância voluntária do participante com as regras, condições e responsabilidades relacionadas a Ideasun.',
            'url' => '/assets/materials/TERMO_DE_ACEITE_DE_PARTICIPACAO_NAS_ETAPAS_PRESENCIAIS_DO_IDEASUN_PARA_MAIORES_18_ANOS.pdf',
            'categoria' => 'template',
            'tags' => 'aceite,+18anos,documentos',
            'ativo' => true,
            'ordem' => 3
        ]);

        Material::create([
            'titulo' => 'Termo de Aceite de Participação (menores de 18 anos)',
            'descricao' => 'Documento que tem por objetivo registrar a concordância voluntária do participante com as regras, condições e responsabilidades relacionadas a Ideasun.',
            'url' => '/assets/materials/TERMO_DE_ACEITE_DE_PARTICIPACAO_NAS_ETAPAS_PRESENCIAIS_DO_IDEASUN_PARA_MENORES_18_ANOS.pdf',
            'categoria' => 'template',
            'tags' => 'aceite,-18anos,documentos',
            'ativo' => true,
            'ordem' => 4
        ]);

        Material::create([
            'titulo' => 'Termo de Autorização de Uso de Imagem (maiores de 18 anos)',
            'descricao' => 'Documento que formaliza o consentimento do indivíduo para que sua imagem e voz sejam captadas e utilizadas.',
            'url' => '/assets/materials/TERMO_DE_AUTORIZACAO_DE_USO_DE_IMAGEM_VOZ_E_RESPECTIVA_CESSAO_DE_DIREITOS_PARA_MAIORES_DE_18_ANOS.pdf',
            'categoria' => 'template',
            'tags' => 'uso de imagem,+18anos,documentos',
            'ativo' => true,
            'ordem' => 5
        ]);

        Material::create([
            'titulo' => 'Termo de Autorização de Uso de Imagem (menores de 18 anos)',
            'descricao' => 'Documento que formaliza o consentimento do indivíduo para que sua imagem e voz sejam captadas e utilizadas.',
            'url' => '/assets/materials/TERMO_DE_AUTORIZACAO_DE_USO_DE_IMAGEM_VOZ_E_RESPECTIVA_CESSAO_DE_DIREITOS_PARA_MENORES_DE_18_ANOS.pdf',
            'categoria' => 'template',
            'tags' => 'uso de imagem,-18anos,documentos',
            'ativo' => true,
            'ordem' => 6
        ]);

        Material::create([
            'titulo' => 'Termo de Consentimento de Tratamento de Dados (menores de 18 anos)',
            'descricao' => 'Ddocumento que formaliza a autorização dos pais ou responsáveis legais para que uma instituição colete, utilize e armazene dados pessoais de crianças ou adolescentes.',
            'url' => '/assets/materials/TERMO_DE_CONSENTIMENTO_DE_TRATAMENTO_DE_DADOS_DE_MENORES_DE_18_ANOS.pdf',
            'categoria' => 'template',
            'tags' => 'consentimento,-18anos,documentos',
            'ativo' => true,
            'ordem' => 7
        ]);

        Material::create([
            'titulo' => 'Termo de Consentimento de Tratamento de Dados (maiores de 18 anos)',
            'descricao' => 'Ddocumento que formaliza a autorização para que uma instituição colete, utilize e armazene dados pessoais.',
            'url' => '/assets/materials/TERMO_DE_CONSENTIMENTO_PARA_TRATAMENTO_DE_DADOS.pdf',
            'categoria' => 'template',
            'tags' => 'consentimento,+18anos,documentos',
            'ativo' => true,
            'ordem' => 8
        ]);
    }
}
