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

        /* DIREÇÃO PREVENTIVA */

        DB::table('questions')->insert([
            'query' => 'Direção preventiva significa:',
            'options' => '[{"0":"Dirigir de forma a prever e prevenir situa\u00e7\u00f5es perigosas no tr\u00e2nsito"},{"1":"Dirigir de forma a reconhecer os perigos portu\u00e1rios e evitar colis\u00f5es"},{"2":"Dirigir de forma a aleat\u00f3ria no transito para sinalizar melhor os riscos"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'DIREÇÃO PREVENTIVA',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Alguns fatores que contribuem para os acidentes no trânsito são',
            'options' => '[{"0":"Habilidade, euforia, alegria e dom\u00ednio total da situa\u00e7\u00e3o adversa"},{"1":"Controle, programa\u00e7\u00e3o do tempo e aten\u00e7\u00e3o quanto as ultrapassagens"},{"2":"Pressa, uso de bebidas alco\u00f3licas, cansa\u00e7o e auto confian\u00e7a"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'DIREÇÃO PREVENTIVA',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Duas formas economizar no transporte são',
            'options' => '[{"0":"Frear constantemente e manter a acelera\u00e7\u00e3o do freio motor"},{"1":"Aproveitar a inercia das descidas e n\u00e3o acelerar constantemente"},{"2":"Acelerar constantemente e desligar o ve\u00edculo nas descidas"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'DIREÇÃO PREVENTIVA',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Dois impactos gerados pelos veículos ao meio ambiente são:',
            'options' => '[{"0":"Danos a fauna brasileira e aos lagos"},{"1":"Inc\u00f4modos ao sistema digestivo e envelhecimento dos tecidos do corpo"},{"2":"Emiss\u00e3o de gases t\u00f3xicos e polui\u00e7\u00e3o sonora (ru\u00eddos)"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'DIREÇÃO PREVENTIVA',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'A distância segura do veículo da frente é:',
            'options' => '[{"0":"60 metros"},{"1":"Regras dos 2 segundos"},{"2":"Regra dos 20 segundos"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'DIREÇÃO PREVENTIVA',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        /* NR 11 - SEGURANÇA NA OPERAÇÃO DE PONTES ROLANTES */

        DB::table('questions')->insert([
            'query' => 'QUAL A DIFERENÇA ENTRE UMA PONTE ROLANTE E UMA MONOVIA?',
            'options' => '[{"0":"Ponte rolante possui 6 movimentos e monovia possui 4 movimentos\u00a0"},{"1":"Ponte rolante se movimenta apenas no sentido longitudinal e transversal\u00a0"},{"2":"Uma \u00e9 para levantamento de cargas e a outra para arraste de cargas"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'NR 11 - SEGURANÇA NA OPERAÇÃO DE PONTES ROLANTES',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'UM FATOR DE SEGURANÇA 7:1 SIGNIFICA:',
            'options' => '[{"0":"Que o material \u00e9 constitu\u00eddo por sete camadas mais uma totalizando 8 camadas"},{"1":"Que o material resiste a sete vezes a carga de trabalho"},{"2":"Que o material poder\u00e1 ser utilizado sete vezes dentro do m\u00eas"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'NR 11 - SEGURANÇA NA OPERAÇÃO DE PONTES ROLANTES',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        
        DB::table('questions')->insert([
            'query' => 'Um conjunto de acessórios onde a cinta de elevação possui um fator de segurança 7:1 e uma manilha possui um fator de segurança 5:1 é correto afirmar que:',
            'options' => '[{"0":"O menor prevalece (5:1)"},{"1":"O maior prevalece (7:1)"},{"2":"Soma-se todos os Fatores de seguran\u00e7a"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'NR 11 - SEGURANÇA NA OPERAÇÃO DE PONTES ROLANTES',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        
        DB::table('questions')->insert([
            'query' => 'PODEMOS IÇAR CARGAS COM CORDAS, ESSA FIRMAÇÃO É:',
            'options' => '[{"0":"Verdadeira"},{"1":"Falsa"},{"2":"Parcialmente verdadeira"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'NR 11 - SEGURANÇA NA OPERAÇÃO DE PONTES ROLANTES',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        
        DB::table('questions')->insert([
            'query' => 'Quanto ao o uso de uma cinta no método CESTO ou BASQUETE é correto afirmar a capacidade dobra:',
            'options' => '[{"0":"Verdadeira"},{"1":"Falsa"},{"2":"Parcialmente verdadeira"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'NR 11 - SEGURANÇA NA OPERAÇÃO DE PONTES ROLANTES',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        /* Segurança na Operação de Pás Carregadeiras Hidráulicas */
        
        DB::table('questions')->insert([
            'query' => 'Qual o objetivo de realizar o teste do filtro de óleo?',
            'options' => '[{"0":"Verificar a exist\u00eancia de \u00e1gua e areia"},{"1":"Verificar a efic\u00e1cia do sistema de drenagem"},{"2":"Verificar a exist\u00eancia de materiais ferrosos"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'Segurança na Operação de Pás Carregadeiras Hidráulicas',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Quanto ao tipo de solo podemos afirmar:',
            'options' => '[{"0":"Verificar a existência de água e areia"},{"1":"Verificar a existência de materiais ferrosos"},{"2":"Verificar a eficácia do sistema de drenagem"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'Segurança na Operação de Pás Carregadeiras Hidráulicas',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Cabe ao empregador',
            'options' => '[{"0":"Realizar o procedimento de pavimentação das vias para evitar que a poeira represente risco de obstrução da visão do operador"},{"1":"Cabe a empresa realizar o procedimento de desvio do fluxo natural dos rios para evitar alagamentos na área operacional"},{"2":"Cabe a empresa realizar o procedimento de umectação das vias para evitar que a poeira represente risco de obstrução da visão do operador"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'Segurança na Operação de Pás Carregadeiras Hidráulicas',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Os três quesitos do operador de máquinas são:',
            'options' => '[{"0":"Confiabilidade, auto confiança e foco"},{"1":"Segurança, Conservação, Habilidade"},{"2":"Comportamento de risco, confiabilidade e auto confiança"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'Segurança na Operação de Pás Carregadeiras Hidráulicas',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Os itens a serem observados na inspeção diária da concha da máquina são:',
            'options' => '[{"0":"Cava de unha ou dentes, bordas cortantes inferiores e bordas cortantes laterais, estado geral da caçamba"},{"1":"Cava de cotovelo, sistema hidráulico, estado geral da máquina"},{"2":"Cava do pneu, bordas cortantes inferiores, estado geral da máquinas e vazamentos"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Segurança na Operação de Pás Carregadeiras Hidráulicas',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Os sistema de filtros de ar são constituídos de:',
            'options' => '[{"0":"Filtro de óleo e filtro rosqueável"},{"1":"Filtro primário e filtro secundário"},{"2":"Ar pneumático e ar terciário"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'Segurança na Operação de Pás Carregadeiras Hidráulicas',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Para realização da manutenção do filtro de ar deve-se',
            'options' => '[{"0":"Utilizar sistema de ar de alta vazão e sempre bater o filtro para retirada da impureza"},{"1":"Afundar o filtro em água, secar a sombra e bater o filtro para retirada da impureza restante"},{"2":"Utilizar sistema de ar de baixa vazão sempre de dentro para fora e nunca bater o filtro para retirada da impureza"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'Segurança na Operação de Pás Carregadeiras Hidráulicas',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Sinais sonoros e luminosos, sinalização e proteção de partes móveis são obrigatórios nas máquinas. Essa afirmação está:',
            'options' => '[{"0":"Correta"},{"1":"Incorreta"},{"2":"Parcialmente Correta"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Segurança na Operação de Pás Carregadeiras Hidráulicas',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Em minerações, as vias simples devem ser duas vezes maiores que o tamanho da maior largura existente na mina. Esta afirmação é:',
            'options' => '[{"0":"Verdadeira"},{"1":"Falsa"},{"2":"Parcialmente Verdadeira"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Segurança na Operação de Pás Carregadeiras Hidráulicas',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Os itens a serem observados na inspeção diária dos pneus são: Existência de cortes, bolhas, torque dos parafusos e calibragem',
            'options' => '[{"0":"Correta"},{"1":"Incorreta"},{"2":"Parcialmente Correta"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Segurança na Operação de Pás Carregadeiras Hidráulicas',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        /*  */

        DB::table('questions')->insert([
            'query' => 'As estatísticas apontam que as fatalidades causadas em acidentes com empilhadeiras estão relacionadas a:',
            'options' => '[{"0":"Tombamentos laterais, Atropelamentos, esmagamentos e ferimento causados pelo garfo"},{"1":"Tombamentos traseiros, Explos\u00f5es e ferimento causados pelo garfo"},{"2":"Inc\u00eandios, Amputa\u00e7\u00f5es, proje\u00e7\u00e3o de partes e queda de diferente nivel"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Operação de Empilhadeiras',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Quando o operador tem sua visão obstruída pela carga, o procedimento será:',
            'options' => '[{"0":"N\u00e3o transportar a carga e solicitar um guindaste"},{"1":"Transportar a carga de frente com o m\u00e1ximo de cuidado"},{"2":"Transportar a carga de r\u00e9"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'Operação de Empilhadeiras',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'O Centro de gravidade combinado da empilhadeira (quando com carga) mudem de acordo com as movimentações executadas. Esta afirmação está:',
            'options' => '[{"0":"Correta"},{"1":"Incorreta"},{"2":"Parcialmente Correta"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Operação de Empilhadeiras',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Um dos fatores causadores de tombamento da empilhadeira é:',
            'options' => '[{"0":"Condu\u00e7\u00e3o em velocidade adequada"},{"1":"Descalibragem dos pneus"},{"2":"Quando o g\u00e1s acaba"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'Operação de Empilhadeiras',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'A manutenção das empilhadeiras é baseada na quantidade de horas trabalhadas, essa informação é retirada de um equipamento chamado:',
            'options' => '[{"0":"Conta giro"},{"1":"Painel de instrumentos"},{"2":"Hor\u00edmetro"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'Operação de Empilhadeiras',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Alguns requisitos do operador de empilhadeira são:',
            'options' => '[{"0":"Conhecer a empresa, Ter no\u00e7\u00e3o de legisla\u00e7\u00e3o trabalhista, saber as rotas de fuga e conhecer de el\u00e9trica de autos"},{"1":"Conhecer o equipamento, ter no\u00e7\u00e3o de espa\u00e7o, saber identificar a carga, conhecer documentos de seguran\u00e7a e sinaliza\u00e7\u00e3o de cargas"},{"2":"Conhecer o terreno externo da empresa, ter no\u00e7\u00e3o de espa\u00e7o, saber identificar a carga, conhecer de mec\u00e2nica de autos"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'Operação de Empilhadeiras',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'O equilíbrio da empilhadeira depende diretamente do:',
            'options' => '[{"0":"Centro de carga"},{"1":"Centro de giro"},{"2":"Centro de gravidade"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'Operação de Empilhadeiras',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'A norma regulamentadora que especifica as obrigatoriedades da movimentação de cargas é',
            'options' => '[{"0":"NR 11"},{"1":"NR 12"},{"2":"NR 13"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Operação de Empilhadeiras',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        
        DB::table('questions')->insert([
            'query' => 'O Centro de gravidade combinado da empilhadeira ( quando com carga) mudem de acordo com as movimentações executadas. Esta afirmação está:',
            'options' => '[{"0":"Correta"},{"1":"Incorreta"},{"2":"Parcialmente Correta"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Operação de Empilhadeiras',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'O Diesel, propano, álcool e gasolina são combustíveis utilizadas nas empilhadeiras elétricas. Essa afirmação está:',
            'options' => '[{"0":"Correta"},{"1":"Incorreta"},{"2":"Parcialmente Correta"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Operação de Empilhadeiras',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        /* NR 35 - Segurança nos Trabalhos em Altura */

        DB::table('questions')->insert([
            'query' => 'É considerado trabalho em altura toda atividade executada a:',
            'options' => '[{"0":"2 metros"},{"1":"5 metros"},{"2":"6 metros"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'NR 35 - Segurança nos Trabalhos em Altura',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Todo profissional ao executar trabalhos em altura deve:',
            'options' => '[{"0":"Estar conectado em dois pontos de ancoragem independentes"},{"1":"Estar conectado em cordas do tipo sisal semi est\u00e1ticas"},{"2":"Estar com os conectores do talabarte ancorados em apenas um ponto"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'NR 35 - Segurança nos Trabalhos em Altura',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'De acordo com as regras de trabalho em altura, o trabalhador sempre deve:',
            'options' => '[{"0":"Manter os conectores do talabarte soltos e ancorar somente quando chegar na \u00e1rea de trabalho"},{"1":"Manter sempre os conectores fixados em ancoragens seguras e em pontos diferentes durante as movimenta\u00e7\u00f5es e trabalhos"},{"2":"Manter sempre a aten\u00e7\u00e3o no trabalho dispensa o uso de cintur\u00e3o e talabartes"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'NR 35 - Segurança nos Trabalhos em Altura',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Garantir que a lei seja cumprida e assegurar a implementação das medidas de proteção estabelecidas na norma NR 35. Essa responsabilidade se aplica ao:',
            'options' => '[{"0":"Trabalhador"},{"1":"Encarregado"},{"2":"Empregador"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'NR 35 - Segurança nos Trabalhos em Altura',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Um ponto de ancoragem deve possuir uma resistência de:',
            'options' => '[{"0":"1000 Kgf"},{"1":"1200 Kgf"},{"2":"1500 Kgf"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'NR 35 - Segurança nos Trabalhos em Altura',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Qual fator de queda que o trabalhador sempre deverá considerar ao trabalhar e altura?',
            'options' => '[{"0":"Fator de queda 2 \u2013 Conectores ancorados abaixo dos joelhos - Potencial grave e iminente"},{"1":"Fator de queda 1 \u2013 Conectores ancorados na linha da cintura - Potencial moderado de les\u00e3o"},{"2":"Fator de queda 0 \u2013 acima da linha dos ombros - Potencial m\u00ednimo de les\u00e3o"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'NR 35 - Segurança nos Trabalhos em Altura',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'O cinturão e talabarte devem ser da mesma marca e modelo (compatíveis). Essa afirmação é:',
            'options' => '[{"0":"Correta"},{"1":"Incorreta"},{"2":"Parcialmente Correta"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'NR 35 - Segurança nos Trabalhos em Altura',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'O anexo I da NR 35 aborda:',
            'options' => '[{"0":"Trabalho em altura"},{"1":"Acesso por cordas"},{"2":"Pontos de ancoragem"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'NR 35 - Segurança nos Trabalhos em Altura',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'O trabalho de acesso por cordas poderá ser executado somente por profissionais:',
            'options' => '[{"0":"Treinados pela NR 33"},{"1":"Qualquer profissional"},{"2":"Somente por profissionais N1, N2 e N3"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'NR 35 - Segurança nos Trabalhos em Altura',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'A forma mais eficaz de resgate é:',
            'options' => '[{"0":"O Auto resgate"},{"1":"Executado por leigos e desconhecidos"},{"2":"Executado pelo SAMU"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'NR 35 - Segurança nos Trabalhos em Altura',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        /* Treinamento CIPA NR 05 */

        DB::table('questions')->insert([
            'query' => 'A CIPA é composta de representantes do empregador e dos empregados. O mandato dos membros eleitos da CIPA deve ter a duração de:',
            'options' => '[{"0":"6 meses"},{"1":"1 ano"},{"2":"2 anos"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'Treinamento CIPA NR 05',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Qual o objetivo da SIPAT ?',
            'options' => '[{"0":"Conscientizar a lideran\u00e7a a respeito da import\u00e2ncia da seguran\u00e7a do trabalho e preven\u00e7\u00e3o"},{"1":"Conscientizar os funcion\u00e1rios a respeito da import\u00e2ncia da preven\u00e7\u00e3o de acidentes e doen\u00e7as ocupacionais"},{"2":"Conscientizar os funcion\u00e1rios a respeito da import\u00e2ncia dos resultados e metas da empresa"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '1',
            'observation' => 'Treinamento CIPA NR 05',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Quando as reuniões extraordinárias são realizadas ?',
            'options' => '[{"0":"Quando a gerencia da empresa solicitar para discutir melhoras de resultados operacionais"},{"1":"Quando os funcion\u00e1rios solicitarem com interesse de solicitar aumentos salariais"},{"2":"Quando ocorrer algum acidente ou denuncia de risco grave no ambiente de trabalho"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'Treinamento CIPA NR 05',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'O que é o mapa de riscos ambientais ?',
            'options' => '[{"0":"Documento que possui simbologia gr\u00e1fica dos riscos ambientais existentes no ambiente de trabalho"},{"1":"Documento que possui detalhes das sa\u00eddas de emerg\u00eancia, rotas de fuga e localiza\u00e7\u00e3o dos extintores"},{"2":"Documento que possui simbologia gr\u00e1fica do sistema el\u00e9trico e pneum\u00e1tico da empesa"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Treinamento CIPA NR 05',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Quem é o responsável em convocar os membros para as reuniões da CIPA ?',
            'options' => '[{"0":"Secretario"},{"1":"Vice-presidente"},{"2":"Presidente"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'Treinamento CIPA NR 05',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Quem escolhe o presidente da CIPA ?',
            'options' => '[{"0":"Minist\u00e9rio do Trabalho"},{"1":"Os trabalhadores"},{"2":"O empregador"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '2',
            'observation' => 'Treinamento CIPA NR 05',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'O cipeiro perderá o mandato se faltar mais de 6 vezes as reuniões sem justificativa. Essa afirmação é:',
            'options' => '[{"0":"Verdadeira"},{"1":"Falsa"},{"2":"Parcialmente Verdadeira"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Treinamento CIPA NR 05',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'O treinamento da CIPA possui duração de 20 horas e deve ser realizado antes da posse da gestão atual. Essa afirmação é:',
            'options' => '[{"0":"Verdadeira"},{"1":"Falsa"},{"2":"Parcialmente Verdadeira"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Treinamento CIPA NR 05',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Uma das principais responsabilidades da empresa é assegurar que os recursos disponibilizados a CIPA sejam direcionados corretamente para o setor de produção da empresa. Esta afirmação é:',
            'options' => '[{"0":"Verdadeira"},{"1":"Falsa"},{"2":"Parcialmente Verdadeira"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Treinamento CIPA NR 05',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('questions')->insert([
            'query' => 'Quando a empresa não se enquadrar no Quadro I da NR 5 deverá designar um responsável pelo cumprimento dos objetivos da norma. Esta afirmação é:',
            'options' => '[{"0":"Verdadeira"},{"1":"Falsa"},{"2":"Parcialmente Verdadeira"},{"3":"Nenhuma das anteriores"}]',
            'right_answer' => '0',
            'observation' => 'Treinamento CIPA NR 05',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

    }
}

