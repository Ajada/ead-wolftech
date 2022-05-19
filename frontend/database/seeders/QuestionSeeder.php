<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'query' => 'Quanto aos hidrantes de parede é correto afirmar',
            'options' => '[{"0":"Todos devem possuir mangueiras, chave storz e esguicho"},{"1":"Todos devem possuir bomba de acionamento, chave storz e mangotinho"},{"2":"Todos devem possuir sistema de detec\u00e7\u00e3o, chave storz, mangotinho e esguicho"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'IT 17 - BRIGADA DE EMERGÊNCIA',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'No quesito Segurança contra incêndio, três aspectos básicos são para as empresas, sendo:',
            'options' => '[{"0":"1 - M\u00e1quinas, 2 \u2013 Manuten\u00e7\u00e3o da frota e 3- Pessoal treinado"},{"1":"1 - Profissionais, 2 - Produtos e 3 - Processo industrial"},{"2":"1 - Equipamentos, 2 \u2013 Manuten\u00e7\u00e3o do sistema e 3- Pessoal treinado"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'IT 17 - BRIGADA DE EMERGÊNCIA',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Materiais de classe A são aqueles que queimam em profundidade e deixam resíduo. Alguns exemplos são:',
            'options' => '[{"0":"G\u00e1s, \u00f3leo e gasolina"},{"1":"Papel, papel\u00e3o e borracha"},{"2":"Equipamentos energizados e zinco, tit\u00e2nio"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'IT 17 - BRIGADA DE EMERGÊNCIA',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'FlashOver significa:',
            'options' => '[{"0":"Momento em que os gases atingem suas temperaturas de igni\u00e7\u00e3o sofrendo uma combust\u00e3o espont\u00e2nea e violenta com a expans\u00e3o do fogo em forma de explos\u00e3o."},{"1":"Momento em que todas as superf\u00edcies expostas atingem suas temperaturas de igni\u00e7\u00e3o mais ou menos simultaneamente e o fogo se espalha rapidamente por todo o espa\u00e7o."},{"2":"Temperatura o qual o material come\u00e7a a desprender gases que por sua vez n\u00e3o se inflamam de imediato."},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'IT 17 - BRIGADA DE EMERGÊNCIA',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'O objetivo do extintor portátil de incêndio é:',
            'options' => '[{"0":"Combater o princ\u00edpio do fogo"},{"1":"Combater o inc\u00eandio"},{"2":"Servir de apoio para luvas, capacetes, panos e outros materiais"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'IT 17 - BRIGADA DE EMERGÊNCIA',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
    }
}

