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
            'titulo' => 'Regulamento Oficial IDEASUN 2026',
            'descricao' => 'Regulamento completo com todas as regras da competição.',
            'url' => '/assets/materials/regulamento-ideasun-2025.pdf',
            'categoria' => 'guia',
            'tags' => 'regras,oficial,regulamento',
            'ativo' => true,
            'ordem' => 1
        ]);

        Material::create([
            'titulo' => 'Declaração de Desistência',
            'descricao' => 'Documento utilizado para formalizar a decisão de uma pessoa em desistir voluntariamente de sua participação na Ideasun 2026.',
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
            'descricao' => 'Documento que formaliza a autorização para que uma instituição colete, utilize e armazene dados pessoais.',
            'url' => '/assets/materials/TERMO_DE_CONSENTIMENTO_PARA_TRATAMENTO_DE_DADOS.pdf',
            'categoria' => 'template',
            'tags' => 'consentimento,+18anos,documentos',
            'ativo' => true,
            'ordem' => 8
        ]);

        // Novos materiais adicionados
        
        Material::create([
            'titulo' => 'Agendamento de Banca',
            'descricao' => 'Guia completo sobre como realizar o agendamento de bancas avaliadoras para a Ideasun 2026, incluindo datas disponíveis e procedimentos.',
            'url' => '/assets/materials/Agendamento_de_Banca_de_Avaliação.pdf',
            'categoria' => 'guia',
            'tags' => 'banca,avaliação,agendamento,guia',
            'ativo' => true,
            'ordem' => 9
        ]);

        Material::create([
            'titulo' => 'Cadastro de Equipes',
            'descricao' => 'Instruções passo a passo para cadastrar equipes na plataforma Ideasun 2026, incluindo os requisitos para cada modalidade.',
            'url' => '/assets/materials/Cadastro_de_Equipes_Ideasun-1.pdf',
            'categoria' => 'guia',
            'tags' => 'cadastro,equipes,inscrição,guia',
            'ativo' => true,
            'ordem' => 10
        ]);

        Material::create([
            'titulo' => 'Modelo de Pitch',
            'descricao' => 'Template para preparação da apresentação de pitch das equipes, com estrutura recomendada e dicas para uma apresentação eficaz.',
            'url' => '/assets/materials/Modelo_Pitch.pptx',
            'categoria' => 'template',
            'tags' => 'pitch,apresentação,template,slide',
            'ativo' => true,
            'ordem' => 11
        ]);

        Material::create([
            'titulo' => 'Treinamento Ideasun',
            'descricao' => 'Guia completo sobre o treinamento oferecido às cidades participantes do Ideasun 2026, incluindo conteúdo programático e metodologia.',
            'url' => '/assets/materials/Treinamento_Ideasun_2025.pdf',
            'categoria' => 'guia',
            'tags' => 'treinamento,capacitação,mentor,guia',
            'ativo' => true,
            'ordem' => 12
        ]);
    }
}
