<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assessments')->insert([
            'assessment_number' => '1',
            'assessment_name' => 'IT 17 - Avaliação Final',
            'questions' => '[{"question":"Quanto aos hidrantes de parede é correto afirmar:", "0":"Todos devem possuir mangueiras, chave storz e esguicho", "1":"Todos devem possuir sistema de detecção, chave storz, mangotinho e esguicho", "2":"Todos devem possuir bomba de acionamento, chave storz e mangotinho","3":"Nenhuma das anteriores"},{"question":"No quesito Segurança contra incêndio, três aspectos básicos são para as empresas, sendo:", "0":" 1 -Equipamentos, 2 – Manutenção do sistema e 3- Pessoal treinado", "1":"1 - Profissionais, 2 - Produtos e 3 - Processo industrial", "2":"1 -Máquinas, 2 – Manutenção da frota e 3- Pessoal treinado","3":"Nenhuma das anteriores"},{"question":"Materiais de classe A são aqueles que queimam em profundidade e deixam resíduo. Alguns exemplos são:", "0":"Papel, papelão e borracha", "1":"Equipamentos energizados e zinco, titânio", "2":"Gás, óleo e gasolina","3":"Nenhuma das anteriores"},{"question":"FlashOver significa: ", "0":"Temperatura o qual o material começa a desprender gases que por sua vez não se inflamam de imediato.", "1":"Momento em que os gases atingem suas temperaturas de ignição sofrendo uma combustão espontânea e violenta com a expansão do fogo em forma de explosão.", "2":"Momento em que todas as superfícies expostas atingem suas temperaturas de ignição mais ou menos simultaneamente e o fogo se espalha rapidamente por todo o espaço.","3":"Nenhuma das anteriores"},{"question":"O objetivo do extintor portátil de incêndio é: ", "0":"Combater o princípio do fogo", "1":"Servir de apoio para luvas, capacetes, panos e outros materiais", "2":"Combater o incêndio","3":"Nenhuma das anteriores"}]',
            'right_answer' => 'A,A,A,B,C',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('assessments')->insert([
            'assessment_number' => '2',
            'assessment_name' => 'Direção Preventiva - Avaliação Final',
            'questions' => '[{"question":"Direção preventiva significa:", "0":"Dirigir de forma a aleatória no transito para sinalizar melhor os riscos", "1":"Dirigir de forma a prever e prevenir situações perigosas no trânsito", "2":"Dirigir de forma a reconhecer os perigos portuários e evitar colisões","3":"Nenhuma das anteriores"},{"question":"Alguns fatores que contribuem para os acidentes no trânsito são:", "0":"Controle, programação do tempo e atenção quanto as ultrapassagens", "1":"Pressa, uso de bebidas alcoólicas, cansaço e auto confiança", "2":"Habilidade, euforia, alegria e domínio total da situação adversa","3":"Nenhuma das anteriores"},{"question":"Duas formas economizar no transporte são:", "0":"Aproveitar a inercia das descidas e não acelerar constantemente", "1":"Acelerar constantemente e desligar o veículo nas descidas", "2":"Frear constantemente e manter a aceleração do freio motor","3":"Nenhuma das anteriores"},{"question":"Dois impactos gerados pelos veículos ao meio ambiente são:", "0":"Emissão de gases tóxicos e poluição sonora (ruídos)", "1":"Danos a fauna brasileira e aos lagos", "2":"Incômodos ao sistema digestivo e envelhecimento dos tecidos do corpo","3":"Nenhuma das anteriores"},{"question":"A distância segura do veículo da frente é:", "0":"Regra dos 20 segundos", "1":"Regras dos 2 segundos", "2":"60 metros","3":"Nenhuma das anteriores"}]',
            'right_answer' => 'B,B,A,A,B',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('assessments')->insert([
            'assessment_number' => '3',
            'assessment_name' => 'NR 11 - Segurança na Operação de Pontes Rolantes - Avaliação Final',
            'questions' => '[{"question":"QUAL A DIFERENÇA ENTRE UMA PONTE ROLANTE E UMA MONOVIA?", "0":"Ponte rolante se movimenta apenas no sentido longitudinal e transversal", "1":"Ponte rolante possui 6 movimentos e monovia possui 4 movimentos", "2":"Uma é para levantamento de cargas e a outra para arraste de cargas","3":"Nenhuma das anteriores"},{"question":"UM FATOR DE SEGURANÇA 7:1 SIGNIFICA:", "0":"Que o material poderá ser utilizado sete vezes dentro do mês", "1":"Que o material é constituído por sete camadas mais uma totalizando 8 camadas", "2":"Que o material resiste a sete vezes a carga de trabalho","3":"Nenhuma das anteriores"},{"question":"Um conjunto de acessórios onde a cinta de elevação possui um fator de segurança 7:1 e uma manilha possui um fator de segurança 5:1 é correto afirmar que:", "0":"Soma-se todos os Fatores de segurança", "1":"O menor prevalece (5:1)", "2":"O maior prevalece (7:1)","3":"Nenhuma das anteriores"},{"question":"PODEMOS IÇAR CARGAS COM CORDAS, ESSA FIRMAÇÃO É:", "0":"Verdadeiro", "1":"Falso", "2":"","3":""},{"question":"Quanto ao o uso de uma cinta no método CESTO ou BASQUETE é correto afirmar a capacidade dobra.", "0":"Verdadeiro", "1":"Falso", "2":"","3":""}]',
            'right_answer' => 'A,C,B,A,A',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('assessments')->insert([
            'assessment_number' => '4',
            'assessment_name' => 'Segurança na Operação de Pás Carregadeiras Hidráulicas - Avaliação Final',
            'questions' => '[{"question":"Sinais sonoros e luminosos, sinalização e proteção de partes móveis são obrigatórios nas máquinas. Essa afirmação está:", "0":"Verdadeiro", "1":"Falso", "2":"","3":""},{"question":"Quanto ao tipo de solo podemos afirmar:", "0":"Define a produção a ser atingida até o final de ada turno de trabalho", "1":" Que define a capacidade de carga e a profundidade dos cortes", "2":"Define a forma de operação e tipo de pneus mais adequado ao terreno","3":"Nenhuma das anteriores"},{"question":"Em minerações, as vias simples devem ser duas vezes maiores que o tamanho da maior largura existente na mina. Esta afirmação é:", "0":"Verdadeiro", "1":"Falsa", "2":"","3":""},{"question":"Cabe ao empregador:", "0":"Cabe a empresa realizar o procedimento de desvio do fluxo natural dos rios para evitar alagamentos na área operacional", "1":"Realizar o procedimento de pavimentação das vias para evitar que a poeira represente risco de obstrução da visão do operador", "2":"Cabe a empresa realizar o procedimento de umectação das vias para evitar que a poeira represente risco de obstrução da visão do operador","3":"Nenhuma das anteriores"},{"question":"Os três quesitos do operador de máquinas são:", "0":"Confiabilidade, auto confiança e foco", "1":"Segurança, Conservação, Habilidade", "2":"Comportamento de risco, confiabilidade e auto confiança","3":"Nenhuma das anteriores"},{"question":"Os itens a serem observados na inspeção diária da concha da máquina são:", "0":"Cava de unha ou dentes, bordas cortantes inferiores e bordas cortantes laterais, estado geral da caçamba", "1":"Cava do pneu, bordas cortantes inferiores, estado geral da máquinas e vazamentos", "2":"Cava de cotovelo, sistema hidráulico, estado geral da máquina","3":"Nenhema das anteriores"},{"question":"Os itens a serem observados na inspeção diária dos pneus são: Existência de cortes, bolhas, torque dos parafusos e calibragem", "0":"Verdadeiro", "1":"Falsa", "2":"","3":""},{"question":"Os sistema de filtros de ar são constituídos de:", "0":"Filtro de óleo e filtro rosqueável", "1":"Ar pneumático e ar terciário", "2":"Filtro primário e filtro secundário","3":"Nenhuma das anteriores"},{"question":"Para realização da manutenção do filtro de ar deve-se:", "0":"Afundar o filtro em água, secar a sombra e bater o filtro para retirada da impureza restante", "1":"Utilizar sistema de ar de alta vazão e sempre bater o filtro para retirada da impureza", "2":"Utilizar sistema de ar de baixa vazão sempre de dentro para fora e nunca bater o filtro para retirada da impureza","3":"Nenhuma das anteriores"},{"question":"Qual o objetivo de realizar o teste do filtro de óleo?", "0":"Verificar a existência de materiais ferrosos", "1":"Verificar a eficácia do sistema de drenagem", "2":"Verificar a existência de água e areia","3":"Nenhuma das anteriores"}]',
            'right_answer' => 'A,B,A,C,B,A,A,C,C,A',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('assessments')->insert([
            'assessment_number' => '5',
            'assessment_name' => 'Operação de Empilhadeiras - Avaliação Final',
            'questions' => '[{"question":"As estatísticas apontam que as fatalidades causadas em acidentes com empilhadeiras estão relacionadas a:", "0":"Tombamentos laterais, Atropelamentos, esmagamentos e ferimento causados pelo garfo", "1":"Tombamentos traseiros, Explosões e ferimento causados pelo garfo", "2":"Incêndios, Amputações, projeção de partes e queda de diferente nivel","3":"Nenhuma das anteriores"},{"question":"Quando o operador tem sua visão obstruída pela carga, o procedimento será:", "0":"Transportar a carga de frente com o máximo de cuidado ", "1":"Transportar a carga de ré", "2":"Não transportar a carga e solicitar um guindaste","3":"Nenhuma das anteriores"},{"question":"O Centro de gravidade combinado da empilhadeira ( quando com carga) mudem de acordo com as movimentações executadas. Esta afirmação está:", "0":"Verdadeiro", "1":"Falso", "2":"","3":""},{"question":"Um dos fatores causadores de tombamento da empilhadeira é:", "0":"Quando o gás acaba", "1":"Descalibragem dos pneus", "2":"Condução em velocidade adequada","3":"Nenhuma das anteriores"},{"question":"O Diesel, propano, álcool e gasolina são combustíveis utilizadas nas empilhadeiras elétricas. Essa afirmação está:", "0":"Correta", "1":"Incorreta", "2":"","3":""},{"question":"A manutenção das empilhadeiras é baseada na quantidade de horas trabalhadas, essa informação é retirada de um equipamento chamado:", "0":"Horímetro", "1":"Conta giro", "2":"Painel de instrumentos","3":"Nenhuma das anteriores"},{"question":"Alguns requisitos do operador de empilhadeira são:", "0":"Conhecer o equipamento, ter noção de espaço, saber identificar a carga, conhecer documentos de segurança e sinalização de cargas", "1":"Conhecer o terreno externo da empresa, ter noção de espaço, saber identificar a carga, conhecer de mecânica de autos", "2":"Conhecer a empresa, Ter noção de legislação trabalhista, saber as rotas de fuga e conhecer de elétrica de autos","3":"Nenhuma das anteriores"},{"question":"O equilíbrio da empilhadeira depende diretamente do:", "0":"Centro de gravidade", "1":"Centro de carga", "2":"Centro de giro","3":"Nenhuma das anteriores"},{"question":"A norma regulamentadora que especifica as obrigatoriedades da movimentação de cargas é:", "0":"NR 13", "1":"NR 11", "2":"NR 12","3":"Nenhuma das anteriores"},{"question":"A empilhadeira é um veículo móvel motorizado utilizado para transporte, levantamento, estocagem, alinhamento e retirada de cargas. Essa afirmação está:", "0":"Correta", "1":"Incorreta", "2":"","3":""}]',
            'right_answer' => 'A,B,A,B,A,A,A,C,B,A',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('assessments')->insert([
            'assessment_number' => '6',
            'assessment_name' => 'NR 35 - Segurança nos Trabalhos em Altura - Avaliação Final',
            'questions' => '[{"question":"É considerado trabalho em altura toda atividade executada a:", "0":"2 metros", "1":"5 metros", "2":"6 metros","3":"Nenhuma das anteriores"},{"question":"De acordo com as regras de trabalho em altura, o trabalhador sempre deve:", "0":"Manter sempre a atenção no trabalho dispensa o uso de cinturão e talabartes", "1":"Manter sempre os conectores fixados em ancoragens seguras e em pontos diferentes durante as movimentações e trabalhos", "2":"Manter os conectores do talabarte soltos e ancorar somente quando chegar na área de trabalho","3":"Nenhuma das anteriores"},{"question":"Garantir que a lei seja cumprida e assegurar a implementação das medidas de proteção estabelecidas na norma NR 35. Essa responsabilidade se aplica ao:", "0":"Encarregado", "1":"Empregador", "2":"Trabalhador","3":"Nenhuma das anteriores"},{"question":"Um ponto de ancoragem deve possuir uma resistência de:", "0":"1500 Kgf", "1":"1200 Kgf", "2":"1000 Kgf","3":"Nenhuma das anteriores"},{"question":"Qual fator de queda que o trabalhador sempre deverá considerar ao trabalhar e altura?", "0":"Fator de queda 1 – Conectores ancorados na linha da cintura - Potencial moderado de lesão", "1":"Fator de queda 0 – acima da linha dos ombros - Potencial mínimo de lesão", "2":"Fator de queda 2 – Conectores ancorados abaixo dos joelhos - Potencial grave e iminente","3":"Nenhuma das anteriores"}{"question":"O cinturão e talabarte devem ser da mesma marca e modelo (compatíveis). Essa afirmação está:", "0":"Correta", "1":"Incorreta", "2":"","3":""},{"question":"O anexo I da NR 35 aborda:", "0":"Acesso por cordas", "1":"Pontos de ancoragem", "2":"Trabalho em altura","3":"Nenhuma das anteriores"},{"question":"O trabalho de acesso por cordas poderá ser executado somente por profissionais:", "0":"Qualquer profissional", "1":"Somente por profissionais N1, N2 e N3", "2":"Treinados pela NR 33","3":"Nenhuma das anteriores"},{"question":"A forma mais eficaz de resgate é:", "0":"Executado pelo SAMU", "1":"Executado por leigos e desconhecidos", "2":"O Auto resgate","3":"Nenhuma das anteriores"},{"question":"Todo profissional ao executar trabalhos em altura deve:", "0":"Estar conectado em cordas do tipo sisal semi estáticas", "1":"Estar conectado em dois pontos de ancoragem independentes", "2":"Estar com os conectores do talabarte ancorados em apenas um ponto","3":"Nenhuma das anteriores"}]',
            'right_answer' => 'A,B,A,A,B,A,A,B,C,B',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('assessments')->insert([
            'assessment_number' => '7',
            'assessment_name' => 'NR 20 - Segurança com Inflamaveis e Combustiveis - Avaliação Final',
            'questions' => '[{question":"", "0":"", "1":"", "2":"","3":""}] - não há perguntas',
            'right_answer' => '',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('assessments')->insert([
            'assessment_number' => '8',
            'assessment_name' => 'Treinamento CIPA NR 05 - Avaliação Final',
            'questions' => '[{"question":"O cipeiro perderá o mandato se faltar mais de 6 vezes as reuniões sem justificativa. Essa afirmação é:", "0":"Verdadeiro", "1":"Falso", "2":"","3":""},{"question":"Qual o objetivo da SIPAT?", "0":"Conscientizar os funcionários a respeito da importância dos resultados e metas da empresa", "1":"Conscientizar os funcionários a respeito da importância da prevenção de acidentes e doenças ocupacionais", "2":"Conscientizar a liderança a respeito da importância da segurança do trabalho e prevenção","3":"Nenhuma das anteriores"},{"question":"Quando as reuniões extraordinárias são realizadas?", "0":"Quando os funcionários solicitarem com interesse de solicitar aumentos salariais", "1":"Quando a gerencia da empresa solicitar para discutir melhoras de resultados operacionais", "2":"Quando ocorrer algum acidente ou denuncia de risco grave no ambiente de trabalho","3":"Nenhuma das anteriores"},{"question":"O treinamento da CIPA possui duração de 20 horas e deve ser realizado antes da posse da gestão atual. Essa afirmação é:", "0":"Verdadeiro", "1":"Falso", "2":"","3":""},{"question":"O que é o mapa de riscos ambientais?", "0":"Documento que possui simbologia gráfica do sistema elétrico e pneumático da empesa", "1":"Documento que possui detalhes das saídas de emergência, rotas de fuga e localização dos extintores", "2":"Documento que possui simbologia gráfica dos riscos ambientais existentes no ambiente de trabalho","3":"Nenhuma das anteriores"},{"question":"Uma das principais responsabilidades da empresa é assegurar que os recursos disponibilizados a CIPA sejam direcionados corretamente para o setor de produção da empresa. Esta afirmação é:", "0":"Verdadeira", "1":"Falsa", "2":"","3":""},{"question":"Quem é o responsável em convocar os membros para as reuniões da CIPA?", "0":"Vice-presidente", "1":"Presidente", "2":"Secretario","3":"Nenhuma das anteriores"},{"question":"Quando a empresa não se enquadrar no Quadro I da NR 5 deverá designar um responsável pelo cumprimento dos objetivos da norma. Esta afirmação é:", "0":"Verdadeiro", "1":"Falso", "2":"","3":""},{"question":"Quem escolhe o presidente da CIPA?", "0":"O empregador", "1":"Ministério do Trabalho", "2":"Os trabalhadores","3":"Nenhuma das anteriores"},{"question":"A CIPA é composta de representantes do empregador e dos empregados. O mandato dos membros eleitos da CIPA deve ter a duração de:", "0":"1 ano", "1":"6 meses", "2":"2 anos","3":"Nenhuma das anteriores"}]',
            'right_answer' => 'A,B,C,A,C,A,A,B,A,A,A',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
    }
}
