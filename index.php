<?php

    //mais uma alteração para marca o arquivo como modificado no git

    

    $signos = []; //criando vetor vazio 
    $signos[] =	'Áries';
    $signos[] =	'Touro';
    $signos[] =	'Gêmeos';
    $signos[] =	'Câncer';
    $signos[] =	'Leão';
    $signos[] =	'Virgem';
    $signos[] =	'Libra';
    $signos[] =	'Escorpião';
    $signos[] =	'Sagitário';
    $signos[] =	'Capricórnio';
    $signos[] =	'Aquário';
    $signos[] =	'Peixes';

    $horoscopos = [];
	$horoscopos[] = 'Arianos comprometidos com namoros e casamentos podem sentir com muita força as mudanças que Julho promete trazer. Essas mudanças podem acontecer no próprio relacionamento, na relação de vocês com a família ou mesmo acarretar uma mudança de residência ou país. Os solitários, podem preparar-se, pois existe uma forte tendência a um novo amor, cheio de paixão, acontecer logo a partir do início do mês. Marte em Leão promete movimentar seu coração.';
	$horoscopos[] = 'A Lua entra em Escorpião, recebe um tenso aspecto de Urano em Touro e de Marte e Mercúrio em Leão indicando um dia de movimento intenso em negociações que envolvem uma parceria financeira. O dia pode envolver tensão, pois uma grande soma de dinheiro pode estar em jogo. Procure manter o equilíbrio emocional.';
	$horoscopos[] = 'Possibilidades de desentendimentos no trabalho. Problemas e dificuldades com um projeto podem surgir. Procure manter a calma diante de imprevistos';
	$horoscopos[] = 'Aproximação de pessoas interessantes. Um romance fora do comum pode começar a qualquer momento, mas não está garantida sua continuidade';
	$horoscopos[] = 'O momento pode estar relacionado com o início de uma reforma ou um mal entendido em família. Procure manter a calma. Evite discussões.';
	$horoscopos[] = 'A necessidade de novos conhecimentos fica ainda mais latente em você. Procure adiar a assinatura de qualquer documento importante.';
	$horoscopos[] = 'Você deve manter seus gastos sob controle. Procure equilibrar suas finanças, pois o momento pede economia. O dinheiro pode chegar de maneira imprevista e inesperada.';
	$horoscopos[] = 'A Lua entra em seu signo, recebe um tenso aspecto de Urano em Touro e de Marte e Mercúrio em Leão indicando um dia de agitação e nervosismo. Você pode estar mais ansioso do que o normal e agir de maneira impulsiva. Procure manter a calma e a racionalidade diante de imprevistos.';
	$horoscopos[] = 'Dia de nervosismo e dificuldade de expressão. Suas emoções e sentimentos, podem passar por um momento de revolução e certo desequilíbrio. Procure meditar e manter a calma.';
	$horoscopos[] = 'Movimento intenso na vida social e no trabalho, em projetos em equipe. O momento pode estar relacionado com um contato comercial com uma empresa inovadora.';
	$horoscopos[] = 'Dia de movimento em projetos profissionais e planos de negócios, que serão colocados imediatamente em prática. O momento pode envolver imprevistos e nervosismo.';
	$horoscopos[] = 'Dia de movimento em projetos de médio prazo, especialmente os que envolvem viagens e contato com pessoas estrangeiras. O momento pode estar relacionado com a decisão de mudar-se de país.';

    $pessoas = [];
    $pessoas[] = [  //array contendo os cados da pessoa 
		"id" => 1,
		"nome" => "Leonardo Moura",
		"idade" => 43,
		"idSigno" => 8,
		"masculino" => true,
		"descricao" => "Uma pessoa muito regrada, centrada. Defende a moral e os bons costumes sempre que pode.",
		"sonho" => "Pular de parapente do alto do himalaia",
		"amiga" => true
    ];

    $pessoas[] = [  //array contendo os cados da pessoa 
		"id" => 2,
		"nome" => "ju Santos",
		"idade" => 18,
		"idSigno" => 3,
		"masculino" => false,
		"descricao" => "adora trabalhar e queijo.",
		"sonho" => "comer todo tipo de queijo existence",
		"amiga" => true
    ];

    //echo('<pre>');  printa o que tem dentro do array
    //print_r($pessoas);
    //echo('<pre>');
    //die();
 
    if($_GET){ //é nescessario digitar na url ?pos=numero do perfil que vc deseja
        $pos = $_GET['pos'];
        $pessoa = $pessoas[$pos]; //vai mudar o numero de acordo com o numero da url
    }
    else{
        $pessoa = $pessoas[0];
    }
    

    if($pessoa['masculino']){
        $sexo = 'Masculino'; //se for masculino vai imprimir masculino no sexo, se nao vai imprimir feminino
    }
    else{
        $sexo = 'Feminino';
    }

    $idsigno = $pessoa['idSigno']
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pessoa['nome'] ?> - Crush Zoodiaco</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/estilos.css">

</head>

<body>

    <header style = "background-image:url(./assets/img/banner-<?php echo $pessoa['id']?>.jpeg)">
        <span><?php echo $pessoa['nome'] ?></span>
        <a class="btn-floating btn-large waves-effect waves-light red">
            <i class="material-icons">add</i>
        </a>

    </header>

    <main>
        <section class="card horizontal">
            <div class="card-image">
                <img src="./assets/img/perfil-<?php echo $pessoa['id']?>.jpeg">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <p><?php echo $pessoa['descricao'] ?></p>  <!-- coloca o array que deseja printa -->
                </div>
            </div>
        </section>

        <section class="card teal">
            <div class="card-content white-text">
                <div>
                    <span class="card-title">Perfil</span>
                    <div>
                        <span>Idade:</span>
                        <span><?php echo $pessoa['idade']?></span>
                    </div>
                    <div>
                        <apan>Sexo:</apan>
                        <apan><?php echo $sexo ?></apan>
                    </div>
                    <div>
                        <apan>Signo:</apan>
                        <apan><?php echo $signos[$idsigno]?></apan>
                    </div>
                </div>
            </div>

            <div class="dados">
                <div>
                    <span class="card-title">Sonho</span>
                    <div>
                        <?php echo $pessoa['sonho']?>
                    </div>
                </div>
            </div>
        </section>

        <section id="horoscopo">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><?php echo $horoscopos[$idsigno]?></span>
                </div>
            </div>
        </section>
    </main>

    <footer class="page-footer teal">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">Footer Content</h5>
                  <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Links</h5>
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © 2014 Copyright Text
              <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
              </div>
            </div>
          </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>