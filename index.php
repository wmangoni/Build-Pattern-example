<?php
include_once "builder_classes.php";

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<meta>
	<title>Trabalho :: Celestino | William</title>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Engenharia de Software</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#builder">Padrão Builder</a></li>
					<li><a href="#framework">Framework</a></li>
					<li><a href="#padrao">Padrao arquitetural</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Fundo cinza</a></li>
					<li><a href="#">Fundo preto</a></li>
					<li class="active"><a href="#">Fundo branco <span class="sr-only">(current)</span></a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<section id="builder">
		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="jumbotron">
			<div class="container">
				<h1>PADRÃO BUILDER</h1>
				<h2>
					O padrão de construtor é um outro padrão criacional, ou seja, o seu objectivo é a criação de objetos. Similar aos fins de padrões Singleton, multiton e fábrica.
					No entanto, o padrão do construtor não só irá criar objetos, mas prepará-los para a sua aplicação também. O padrão do construtor, na verdade, usa o padrão Factory Method nos bastidores, mas eu vou chegar para que em breve.
				</h2>
				<p>
					Quando usar um construtor
					O padrão do construtor é mais útil em aplicações de grande porte (ish) (como a maioria dos padrões). O objetivo é criar um objeto, pré-definir alguns de seus atributos, injetar dependências e outra configuração geral de objetos. Assim, no momento da aplicação (cliente / controller) obtém o objeto, ele está pronto para ser usado em sua glória.
				</p>
				<p>Se você precisar de uma classe que requer qualquer tipo de instalação, a criação de um construtor que irá criar o objeto para você, é quase sempre a melhor opção.</p>
				<!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
			</div>
		</div>

		<div class="container">
			<!-- Example row of columns -->
			<div class="row">
				<div class="col-md-6">
					<h2>Quando não usar um construtor</h2>
					<p>
						Se tudo que você precisa fazer inicializar uma classe, mas ele não requer qualquer configuração, assim como você pode inicializar a classe si mesmo usando um container de injeção de dependência ou uma fábrica.
					</p>
					<div class="col-md-12">
						<img class="thumbnail" src="builder-img.gif" width="100%">
					</div>
					<!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
				</div>
				<div class="col-md-6">
					<h2>Builders para noobs</h2>
					<p>
						Se você nunca foram um desenvolvedor júnior, que todos nós estávamos era uma vez. Você terá quase definitivamente criou uma classe, onde você passar um monte de atributos por meio para o construtor, que por sua vez cria o objeto. Isto tem o mesmo resultado final como a utilização de uma classe construtor, mas tem suas desvantagens. Aqui estão algumas delas.
					</p>
					<p>
						Ele pode ficar confuso rápido se você começar a adicionar mais de 2 ou 3 argumentos para você construtor. PHP Mess Detector estará em sua volta com certeza.
						Se você precisa criar vários construtores para uma classe particular, você vai ser preso com ter que implementar algumas interruptor nojento em seu construtor.
						O teste pode ser mais difícil como __construct métodos não pode ser arrancado.
						Dizendo tudo isso, se você tem certeza absoluta de que você só vai precisar de 1 ou 2 argumentos de configuração e que você não vai precisar de vários construtores. Construindo um objeto no construtor pode ser 	mais arrumado. Basta lembrar de não fazer nada, mas os valores definidos dentro um construtor.
					</p>
					<!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
				</div>
				<div class="col-md-6">
					<h2>Regras ao usar um construtor</h2>
					<p>
						<ul>
							<li>Cada construtor que você criar deve ter vários métodos, cada método só deve definir um atributo, executar uma peça de configuração ou injetar uma dependência.</li>
							<li>Cada construtor que você cria para uma classe, deve ser polimórfico e implementar a mesma interface.</li>
							<li>Cada construtor deve ter um método getResult (), que irá devolver o objecto totalmente preparado.</li>
						</ul>
						<p>
							Em vez de dirigir chamando um construtores preparar métodos, o construtor deve ser criado e passado para um objeto diretor.
							Cada objeto diretor deve ter um método de construção que chama cada método da configuração construtores. Isto é possível desde que todos os construtores implementar a mesma interface, tornando-	polimórfica.
							desvantagens
							Agarrando em palhas, eu diria usando um construtor torna seu código marginalmente mais difícil para depurar, como acrescenta mais uma camada para a sua aplicação.
						</p>

					</p>
				</div>
				<div class="col-md-6">
					<h2>Exemplo</h2>
					<p>
						Por favor note que para manter este exemplo um pouco mais simples, eu sacrifiquei encapsulamento, não criando métodos setter e getter. Normalmente, você iria criar estes, mas aqui eu preferia concentrar-se na classe construtor.
					</p>
					<div class="col-md-12">
						<?php include_once "text.php"; ?>
					</div>
					<!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
				</div>
				<div class="col-md-12">
					<h2>Resultado</h2>
					<p>
						<?php
							var_dump("<pre>", $employedMale, $unemployedMale, $employedFemale, $unemployedFemale);
						?>
					</p>
					<!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
				</div>
			</div>
		</section>

		<section id="framework">
			<div class="jumbotron">
			<div class="container">
				<h1>FRAMEWORK</h1>
				<h2>
					Que o que é um quadro? Vamos passar por cima para aqueles que não entendem. E não para recorrer a definições wikipedistas , poderíamos imaginar como uma camada (conjunto de bibliotecas, classes, métodos ...) aplicada a uma linguagem que nos ajuda a executar tarefas repetitivas maneira muito mais simples e porque não, limpo (ver MVC ).
				</h2>

				<p>
					Ok, talvez alguns de vocês não vê-lo tão estranho que usar um framework PHP; não surpreendentemente, há um número de pessoas usando jQuery Javascript o seu quadro (como um servidor), para citar muitos outros. No entanto, existem muitas pessoas que sempre foram bastante cético sobre tudo isso: Não envolvem muito recarga grátis? Será que vai custar muito para aprender? É realmente vale a pena?
				</p>

				<p>
					É verdade que há muito que, aqui em Freshware, nós ouvir falar sobre CodeIgniter , mas nunca começou a pesquisar até algumas semanas atrás. Isso abriu um novo mundo. É claro que não é a única estrutura que existe. Nós conversamos com outros quadros de sempre.
				</p>

				<p>Nós estávamos olhando para a documentação (enquanto comparativo) outro (não todos) como:</p>
				<!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
			</div>
		</div>

		<div class="container">
			<!-- Example row of columns -->
			<div class="row">
				<div class="col-md-6">
					<h2>Quando não usar um construtor</h2>
					<ul>
						Zend Framework, o "oficial" excelência framework PHP par. A curva de aprendizagem não é muito favorável e benchmarks também.
CakePHP é um outro nome grande, mas não muito flexível, às vezes. É mais fácil do Zend e um código resultante mais legível, no entanto, nós simplesmente não gosta do tema da rigidez. Aqui é alguém que suporta tanto com razão.
Symfony tem sido daqueles que têm menos convencido nós por seus pobres dificuldades de desempenho e de aprendizagem, embora seja bastante completo. Talvez devêssemos investigar outra coisa.
Kohana, muito bom. É semelhante ao CodeIgniter em termos de programação e usa muito mais PHP5 potência (não porque ele suporta PHP4, como faz CodeIgniter). Módulos é bastante interessante e eu acho que se traduz em menor tempo de desenvolvimento. No entanto, fórum CodeIgniter não é uma boa opinião (pelo menos bastante objetiva) explica que Kohana pode ser bastante promissor, mas que deve mudar de rumo, basicamente.
Yii, pouco conhecido em comparação com os seus concorrentes, jovem, mas com o crescimento exponencial. As pessoas falam bem dele e de seu trabalho certamente não. O desempenho é muito bom e é tudo OOP, além de atualizações recentes. Por outro lado, é tão jovens meios que ainda é um pouco imaturo.
					</ul>
					<div class="col-md-12">
						<img class="thumbnail" src="builder-img.gif" width="100%">
					</div>
					<!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
				</div>
				<div class="col-md-6">
					<h2>Builders para noobs</h2>
					<p>
						Se você nunca foram um desenvolvedor júnior, que todos nós estávamos era uma vez. Você terá quase definitivamente criou uma classe, onde você passar um monte de atributos por meio para o construtor, que por sua vez cria o objeto. Isto tem o mesmo resultado final como a utilização de uma classe construtor, mas tem suas desvantagens. Aqui estão algumas delas.
					</p>
					<p>
						Ele pode ficar confuso rápido se você começar a adicionar mais de 2 ou 3 argumentos para você construtor. PHP Mess Detector estará em sua volta com certeza.
						Se você precisa criar vários construtores para uma classe particular, você vai ser preso com ter que implementar algumas interruptor nojento em seu construtor.
						O teste pode ser mais difícil como __construct métodos não pode ser arrancado.
						Dizendo tudo isso, se você tem certeza absoluta de que você só vai precisar de 1 ou 2 argumentos de configuração e que você não vai precisar de vários construtores. Construindo um objeto no construtor pode ser 	mais arrumado. Basta lembrar de não fazer nada, mas os valores definidos dentro um construtor.
					</p>
					<!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
				</div>
				<div class="col-md-6">
					<h2>Regras ao usar um construtor</h2>
					<p>
						<ul>
							<li>Cada construtor que você criar deve ter vários métodos, cada método só deve definir um atributo, executar uma peça de configuração ou injetar uma dependência.</li>
							<li>Cada construtor que você cria para uma classe, deve ser polimórfico e implementar a mesma interface.</li>
							<li>Cada construtor deve ter um método getResult (), que irá devolver o objecto totalmente preparado.</li>
						</ul>
						<p>
							Em vez de dirigir chamando um construtores preparar métodos, o construtor deve ser criado e passado para um objeto diretor.
							Cada objeto diretor deve ter um método de construção que chama cada método da configuração construtores. Isto é possível desde que todos os construtores implementar a mesma interface, tornando-	polimórfica.
							desvantagens
							Agarrando em palhas, eu diria usando um construtor torna seu código marginalmente mais difícil para depurar, como acrescenta mais uma camada para a sua aplicação.
						</p>

					</p>
				</div>
				<div class="col-md-6">
					<h2>Exemplo</h2>
					<p>
						Por favor note que para manter este exemplo um pouco mais simples, eu sacrifiquei encapsulamento, não criando métodos setter e getter. Normalmente, você iria criar estes, mas aqui eu preferia concentrar-se na classe construtor.
					</p>
					<div class="col-md-12">
						<?php include_once "text.php"; ?>
					</div>
					<!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
				</div>
				<div class="col-md-12">
					<h2>Resultado</h2>
					<p>
						<?php
							var_dump("<pre>", $employedMale, $unemployedMale, $employedFemale, $unemployedFemale);
						?>
					</p>
					<!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
				</div>
			</div>
		</section>

		<hr>

		<footer>
			<p>&copy; 2016 Uniritter.</p>
		</footer>
	</div> <!-- /container -->
</body>
</html>