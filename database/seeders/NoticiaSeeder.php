<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table("noticias")->insert([
            [
                "titulo" => "IA Brasileira Revoluciona Atendimento ao Cliente",
                "resumo" => "Startup desenvolve inteligência artificial capaz de reduzir filas de suporte em até 70%.",
                "conteudo" => "Uma startup brasileira apresentou uma nova plataforma de inteligência artificial voltada para atendimento ao cliente. A tecnologia utiliza processamento de linguagem natural para responder dúvidas em tempo real, aumentando a eficiência e reduzindo custos operacionais para empresas de diversos setores.",
                "imagem" => "ia_atendimento.jpg",
                "categoria_id" => 1,
                "usuario_id" => 1,
                "ativo" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "titulo" => "Novo Smartphone Dobrável Chega ao Mercado",
                "resumo" => "Fabricante lança aparelho com tela flexível e bateria de longa duração.",
                "conteudo" => "O mercado de smartphones recebeu um novo modelo dobrável com tela AMOLED de última geração. O dispositivo promete maior resistência às dobras e autonomia de até dois dias de uso moderado, além de recursos avançados de inteligência artificial para fotografia.",
                "imagem" => "smartphone_dobravel.jpg",
                "categoria_id" => 2,
                "usuario_id" => 1,
                "ativo" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "titulo" => "Computação Quântica Avança em Testes Comerciais",
                "resumo" => "Empresas iniciam testes para aplicações práticas da computação quântica.",
                "conteudo" => "Grandes empresas de tecnologia anunciaram avanços em seus projetos de computação quântica. Os testes demonstraram melhorias significativas na resolução de problemas complexos relacionados à logística, criptografia e análise de grandes volumes de dados.",
                "imagem" => "computacao_quantica.jpg",
                "categoria_id" => 3,
                "usuario_id" => 1,
                "ativo" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "titulo" => "Atualização de Sistema Operacional Melhora Segurança",
                "resumo" => "Nova versão corrige vulnerabilidades críticas e adiciona recursos de privacidade.",
                "conteudo" => "A atualização mais recente de um popular sistema operacional trouxe correções para diversas falhas de segurança identificadas nos últimos meses. Além disso, foram adicionadas ferramentas que oferecem maior controle sobre o compartilhamento de dados pessoais.",
                "imagem" => "atualizacao_sistema.jpg",
                "categoria_id" => 4,
                "usuario_id" => 1,
                "ativo" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "titulo" => "Robôs Autônomos São Testados em Centros Logísticos",
                "resumo" => "Tecnologia promete acelerar entregas e reduzir custos operacionais",
                "conteudo" => "Empresas de logística iniciaram testes com robôs autônomos para movimentação de mercadorias em centros de distribuição. Os equipamentos utilizam sensores e algoritmos de navegação avançados para operar com segurança e eficiência em ambientes movimentados.",
                "imagem" => "robos_logistica.jpg",
                "categoria_id" => 5,
                "usuario_id" => 1,
                "ativo" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
