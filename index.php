<?php
include_once "builder_classes.php";
?>

<!DOCTYPE html>
<html>
<head>
	<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
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
				<a class="navbar-brand" href="#builder">Engenharia de Software</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#builder">Padrão Builder</a></li>
					<li><a href="#framework">Framework</a></li>
					<li><a href="#padrao">Padrao arquitetural</a></li>
					<li><a href="#bibliografia">Bibliografia</a></li>
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
					O padrão de Builder é um padrão criacional, ou seja, o seu objectivo é a criação de objetos.
				</h2>
				<p>
					Similar a proposta dos padrões Singleton, multiton e Factory.
					No entanto, o padrão Builder não só irá criar objetos, mas prepará-los para a sua aplicação também. O padrão do Builder, na verdade, usa o padrão Factory Method nos bastidores, como veremos mais adiante.
				</p>
				
			</div>
		</div>

		<div class="container">
			<!-- Example row of columns -->
			<div class="row">
				<div class="col-md-6">
					<h2>Quando usar o Buider Pattern</h2>
					<p>
						O padrão do Builder é mais útil em aplicações de grande porte (como a maioria dos padrões). O objetivo é criar um objeto, pré-definir alguns de seus atributos, injetar dependências e outra configuração geral de objetos. Assim, no momento que a aplicação (cliente / controller) obtém o objeto, ele está pronto para ser usado em sua glória.
					</p>
					<p>Se você precisar de uma classe que requer qualquer tipo de instalação, a criação de um Builder que irá criar o objeto para você, é quase sempre a melhor opção.</p>
				</div>
				<div class="col-md-6">
					<h2>Quando não usar o Buider Pattern</h2>
					<p>
						Se tudo que você precisa é fazer inicializar uma classe, mas ele não requer qualquer configuração, assim como você pode inicializar a classe si mesmo usando um container de injeção de dependência ou uma fábrica.
					</p>
					<div class="col-md-12">
						<img class="thumbnail" src="builder-img.gif" width="100%">
					</div>

				</div>
				<div class="col-md-6">
					<h2>Builders para noobs</h2>
					
					<p>
						Se você nunca programou ou é um desenvolvedor júnior, que todos nós já fomos um dia. Certamente você criou uma classe, onde você passou um monte de atributos por meio do contrutor, que por sua vez criou o objeto. Isto tem o mesmo resultado final que a utilização de um padrão Builder, mas tem suas desvantagens. Aqui estão algumas delas.
					</p>

					<ul>					
						<li>Sua classe pode ficar confusa se você começar a adicionar mais de 2 ou 3 argumentos para o Construtor. PHP Mess Detector estará em sua volta o tempo todo (telinha laranja o tempo todo).</li>
						<li>Se você precisar criar várias regras/configurações para uma classe em particular, você precisará implementar um  switch ou vários IFs em seu construtor.</li>
						<li>Testar essa classe será bem mais difícil e qualquer erro vai requerer muito tempo debugando código.</li>
					</ul>

					<p>Dizendo tudo isso, se você tem certeza absoluta de que você só vai precisar de 1 ou 2 argumentos de configuração e que você não vai precisar de vários IFs no construtor. Usar o padrão Builder pode ser	muito mais eficiente. Basta lembrar que não precisa fazer nada além de definir atributos dentro do construtor.</p>

				</div>
				<div class="col-md-6">
					<h2>Regras ao usar o Builder Pattern</h2>
					<p>
						<ul>
							<li>Cada Builder que você criar deve ter vários métodos, cada método só deve definir um atributo, executar uma peça de configuração ou injetar uma dependência.</li>
							<li>Cada Builder que você cria para uma classe, deve ser polimórfico e implementar a mesma interface.</li>
							<li>Cada Builder deve ter um método getResult (), que irá devolver o objecto totalmente preparado.</li>
						</ul>
					</p>
				</div>
				<div class="col-md-12">
					<h2>Exemplo</h2>
					<p>
						Por favor note que para manter este exemplo um pouco mais simples, eu sacrifiquei encapsulamento, não criando métodos setter e getter. Normalmente, você iria criá-los, mas aqui eu preferi concentrar-me na classe Builder.
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
					Existem muitas definições para “framework“, feitas por muitas pessoas diferentes; algumas muito estudadas e que desenvolveram seus próprios frameworks, outras nem tanto, mas que buscam uma definição precisa para o termo.
				</h2>

				<p>
					Segundo a Wikipédia, framework<br>
					<blockquote><em>"é uma estrutura de suporte definida em que um outro projeto de software pode ser organizado e desenvolvido. Um framework pode incluir programas de suporte, bibliotecas de código, linguagens de script e outros softwares para auxiliar no desenvolvimento e unir diferentes componentes de um projeto de software."</em></blockquote>
				</p>

				<p>
					Realmente é uma descrição bem feita e que demonstra, de forma bem satisfatória, o que é um framework. Se alguém perguntasse para mim, minha definição não seria muito diferente. Seria algo como:<br>
					<blockquote><em>"Framework é um conjunto de scripts feitos por pessoas mais inteligentes que eu para eu programar de forma mais rápida, fácil e eficiente."</em></blockquote>
				</p>
			</div>
		</div>

		<div class="container">
			<!-- Example row of columns -->
			<div class="row">
				<div class="col-md-6">
					<h2>Quais as vantagens em usar frameworks?</h2>
					<p>
						Você já deve ter percebido que há muitas vantagens em se usar um framework. Mas, para ser mais explícito, algumas das vantagens em se usar frameworks são (a ordem não é por importância):
					</p>
					<ul>
						<li><strong>Utilidade.</strong> O objetivo primeiro dos <em>framworks</em> é auxiliar no desenvolvimento de aplicações e <em>softwares</em>. Para tal, eles têm funcionalidades nativas das mais variadas, que ajudam você a resolver as questões sobre programação do dia-a-dia com muito mais qualidade e eficiência.</li>
						<li><strong>Segurança.</strong> Os bons <em>frameworks</em> são projetados de modo a garantir a segurança de quem programa e, principalmente, de quem usa o que foi feito a partir dele. Não se preocupe mais com aquelas intermináveis linhas de código para evitar um <a title="Mais sobre SQL Injection, na Wkipédia." href="http://en.wikipedia.org/wiki/SQL_injection">SQL Injection</a>, por exemplo; com <em>frameworks</em>, a parte de segurança já “vem de fábrica”.</li>
						<li><strong>Extensibilidade.</strong> Os <em>frame works</em> permitem que você extenda suas funcionalidades nativas. Se aquela biblioteca de envio de <em>e-mails</em> por SMTP não contempla todas as possibilidades que você gostaria, simplesmente extenda suas funcionalidades e as use como se fossem parte do <em>framework</em> (na verdade, elas serão).</li>
						<li><strong>Economia de tempo.</strong> O que você demoraria algumas horas ou alguns dias para fazer, você encontra pronto em um <em>framework</em>. Pense no quão trabalhosas aquelas funções de manipulação de imagens são; usando um <em>framework</em> que tenha isso, você só usa, e pronto.</li>
						<li><strong>Ajuda fácil.</strong> Os que desenvolvem <em>framworks</em> geralmente disponibilizam material de qualidade nos <em>web sites</em> ou repositórios oficiais, com uma vasta documentação a respeito. Além disso, os bons <em>frameworks</em> sempre têm uma comunidade de desenvolvedores dispostos a se ajudarem entre si. É um prazer para os que já sabem mexer ajudar os que ainda não sabem (embora a falta de tempo também seja uma realidade).</li>
					</ul>

					<div class="col-md-12">
						<img class="thumbnail" src="estrutura.png" width="100%">
					</div>

				</div>
				<div class="col-md-6">
					<h2>Sobre o Codeigniter</h2>
					<p>
						CodeIgniter foi originalmente desenvolvido por Rick Ellis (CEO da <a title="Página oficial da EllisLab Inc." href="http://ellislab.com/">EllisLab Inc.</a>).
						O framework foi escrito para ter desempenho no &#8220;mundo real&#8221;, com muitos da classe bibliotecas, helpers e sub-sistemas baseados no código base do 
						<a title="Página oficial do ExpressionEngine." href="http://expressionengine.com/">ExpressionEngine</a>; 
						atualmente é desenvolvido e mantido pela ExpressionEngine Development Team.
					</p>
					<p>
						<a title="Site oficial do CodeIgniter." href="http://codeigniter.com/">CodeIgniter</a>, como bom <em>framework</em> que é, permite o desenvolvimento de <em>web sites</em>, <em>softwares</em> e aplicações em PHP de maneira ágil e relativamente descomplicada. O objetivo do CodeIgniter é disponibilizar um <em>framework</em> de <strong>máxima performance e capacidade, que seja flexível e o mais leve possível</strong>. Para conseguir estes objetivos, as bases do CodeIgniter são:
					</p>
					<ul>
						<li><strong>Instanciamento dinâmico.</strong> No CodeIgniter, componentes são carregados e rotinas executadas somente quando preciso, ao invés de globalmente;</li>
						<li><strong>Junção de componentes.</strong> Os componentes do <em>framework</em> são intercomunicativos, proporcionando alto índice de reutilização e flexibilidade dos sistemas baseados/derivados;</li>
						<li><strong>Singularidade dos componentes.</strong> No CodeIgniter, cada classe &#8211; e respectivas funções &#8211; é autônoma, o que permite elevar o grau de utilidade e o sistema, como um todo, ter mais performance.</li>
					</ul>

				</div>
				<div class="col-md-6">
					<h2>CodeIgniter utiliza o padrão MVC</h2>
					<p>
						O conhecido e &#8220;consagrado&#8221; padrão MVC foi adotado no CodeIgniter. 
						Todo o <em>framework</em> é baseado em <em>Models</em>, <em>Views</em> e <em>Controllers</em>; 
						mas, diferente de muitos <em>frameworks</em> PHP, existe realmente uma flexibilidade muito grande! 
						Por exemplo, um <em>Controller</em> não está &#8220;amarrado&#8221;, necessariamente, a um <em>View</em> e, inclusive, pode, este <em>Controller</em>, chamar diferentes <em>Models</em> e diferentes <em>Views</em> &#8211; 
						torna-se muito fácil fazer <em>templates</em>, por exemplo.
					</p>
				</div>
				<div class="col-md-6">
					<h2>Classes, bibliotecas e &#8220;helpers&#8221; nativos para diversas funcionalidades</h2>
					<p>Como bom <em>framework</em> PHP, CodeIgniter tem seus próprios excelentes recursos nativos, utilizados através de suas bibliotecas, &#8220;<em>helpers</em>&#8221; e classes que já constam no <em>framework</em> por <em>default</em>:
					</p>
					<ul>
						<li><strong>Calendários.</strong> Fácil criação de calendários, inclusive com criação de <em>templates</em> de formatação e exibição.</li>
						<li><strong>Bancos de dados.</strong> De maneira simples e rápida é possível: carregar <em>databases</em>, executar <em>querys</em>, manipular resultados de consultas, realizar transações (como se fosse <a title="Sobre PDO e alguns exemplos de PHP Database Object." href="http://www.acordapraweb.com/pdo-bancos-de-dados-no-php5/">PDO</a>), fazer <em>query caching</em>, dentre outros.</li>
						<li><strong>E-mails.</strong> Enviar <em>e-mails</em> em protocolos diferentes (Mail, Sendmail e SMTP), envio de cópias e cópias ocultas, <em>e-mail</em> em texto puro ou HTML, enviar e-mail com anexos, ferramenta própria para <em>debug</em>, dentre outros.</li>
						<li><strong>Criptografia.</strong> Funções gerais de criptografia, através do uso de <em>hashings</em> e chaves.</li>
						<li><strong>Formulários.</strong> Criação de <em>tags</em> de formulário &#8220;<em>on the fly</em>&#8220;, tratamento de campos e informações, <em>upload</em> de arquivos, etc.</li>
						<li><strong>Manipulação de imagens.</strong> Redimensionar, criar miniaturas, rotacionar, cortar e inserir marca d&#8217;água.</li>
						<li><strong>FTP.</strong> Funções gerais de FTP, como mover, renomear, deletar, etc; e ainda uma função especial de espelhagem (&#8220;<em>mirroring</em>&#8220;), que permite criação dinâmica de diretórios no servidor a partir de arquivos na máquina local.</li>
						<li><strong>Compactação de arquivos.</strong> Manipulação, criação, controle e edição de arquivos compactados, sendo possível criar arquivos diretamente no servidor, acrescentar files diretamente e fazer <em>downloads</em> dos mesmos.</li>
						<li><strong>Controle de <em>cookies</em> sessões PHP.</strong> Manipulação e controle geral de <em>cookies</em> e sessões PHP, com todas suas funções, capacidades e potencialidades existentes.</li>
						<li><strong>Muitas outras funcionalidades.</strong> <a href="http://codeigniter.com/user_guide/overview/features.html">Muitas mesmo!</a></li>
					</ul>
				</div>
			</div>
		</section>

		<section id="padrao">
			<div class="jumbotron">
				<div class="container">
					<h1>PADRÃO MVC</h1>
					<h2>
						O padrão MVC foi descrito pela primeira vez em 1979 por Trygve Reenskaug, que trabalhava no Smalltalk.
					</h2>

					<p>
						Além de dividir a aplicação em três tipos de componentes, o desenho MVC define as interações entre eles.
					</p>
					
					<ul>
						<li>Um controlador (controller) envia comandos para o modelo para atualizar o seu estado por exemplo, editando um documento). O controlador também pode enviar comandos para a visão associada para alterar a apresentação da visão do modelo (por exemplo, percorrendo um documento).</li>
						<li>Um modelo (model) armazena dados e notifica suas visões e controladores associados quando há uma mudança em seu estado. Estas notificações permitem que as visões produzam saídas atualizadas e que os controladores alterem o conjunto de comandos disponíveis. Uma implementação passiva do MVC monta estas notificações, devido a aplicação não necessitar delas ou a plataforma de software não suportá-las.</li>
						<li>A visão (view) Gera uma representação (Visão) dos dados presentes no modelo solicita do modelo.</li>
					</ul>

				</div>
			</div>

		<div class="container">
			<!-- Example row of columns -->
			<div class="row">
				<div class="col-md-12">
					<h2>USO EM APLICAÇÃO WEB</h2>
					<p>
						Apesar de desenvolvida originalmente para computação pessoal, o MVC foi amplamente adaptado como uma arquitetura para as aplicações World Wide Web em todas as linguagens de programação maiores. Muitos frameworks de aplicação comerciais e não comerciais foram criados tendo como base esse modelo. Estes frameworks variam em suas interpretações, principalmente no modo que as responsabilidades MVC são divididas entre o cliente e servidor.
					</p>
					<p>
						Os frameworks web MVC mais recentes levam uma abordagem de thin client que colocou quase o modelo, a visão e a lógica do controlador inteiros no servidor. Nesta abordagem, o cliente envia requisições de hiperlink ou entrada de formulário ao controlador e então recebe uma página web completa e atualizada (ou outro documento) da visão. O modelo existe inteiramente no servidor. Como as tecnologias de cliente amadureceram, frameworks como JavaScriptMVC e Backbone foram criados o que permite que os componentes MVC executem parcialmente no cliente.
					</p>
					<p>
						Um caso prático é uma aplicação web em que a visão é um documento HTML (ou derivado) gerado pela aplicação. O controlador recebe uma entrada <strong>GET</strong> ou <strong>POST</strong> após um estímulo do utilizador e decide como processá-la, invocando objetos do domínio para tratar a lógica de negócio, e por fim invocando uma visão para apresentar a saída
					</p>

					<div class="col-md-12">
						<img class="thumbnail" src="mvc.jpg" width="50%">
					</div>

				</div>
		</section>

		<section id="bibliografia">
			<div class="jumbotron">
				<div class="container">
					<h1>Bibliografia</h1>
					<h2>
						Abaixo segue a lista de sites que foram consultados
					</h2>
					<ul>
						<li><a href="http://codeigniterbrasil.com/">codeigniterbrasil.com</a></li>
						<li><a href="https://pt.wikipedia.org/wiki/MVC">pt.wikipedia.org/wiki/MVC</a></li>
						<li><a href="http://www.jakowicz.com/builder-pattern-in-php/">www.jakowicz.com/builder-pattern-in-php/</a></li>
					</ul>

				</div>
			</div>
		</section>

		<hr>

		<footer class="col-md-12">
			<p>&copy; 2016 Uniritter.</p>
		</footer>
	</div> <!-- /container -->
	<script>
		jQuery(document).ready(function($) {
			$('#navbar li').on('click', function(){
				$('#navbar li').removeClass('active');
				$(this).addClass('active');
			});
		});
	</script>
</body>
</html>