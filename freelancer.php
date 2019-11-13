<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$result_freelancer = "select * from freelancer where profissao like '%$filtro%' order by nome";
$consulta = mysqli_query($conn, $result_freelancer );
$registros = mysqli_num_rows($consulta);


mysqli_close($conn);


?>

<!DOCTYPE html>
<htm lang="pt-pt">
<head>
	<link rel="stylesheet" type="text/css" href="css/Estiilloo.css">
	<title>FreeWork</title>
	<meta charset="utf-8">
	<meta name="Amarildo Vunge" content="FreeWork Service">
	<meta name="description" content="Site de FreeLancer">
</head>
	<body>
		<div id="interface">
			<header id="Cabecalho">
				<hgroup>
			<h1>FreeWorker</h1>
					<h2>Ganhe Seu Dinheiro sem sair de casa apenas com um clique</h2>
	
		<nav id="menu">
		<h1>Menu principal</h1>
		<ul type="disc">
	<a href="index.php"><li>Home</li></a>
	<a href=""><li>Freelancer</li></a>
	<a href="formulario_freelancer.php"><li>Cadastrar</li></a>
	<a href="sobre.html"><li>Sobre-Nós</li></a>
	
	</ul>
		</nav>
	</header>

	<section id="corpo">

		<form method="get" action="">

			profissão <input type="text" name="filtro" class="campos" required autofocus>
			<input type="submit" value="pesquisar" class="btn">
			
		</form>

		<?php 

		print "Resultado da pesquisa com a palavra <strong>$filtro</strong><br><br>";

		print "$registros registros encontrados <br><br>";

		


	while  ($exibirRegistros = mysqli_fetch_array($consulta)) {

				
				$nome = $exibirRegistros[1];
				$email = $exibirRegistros[2];
				$telefone = $exibirRegistros[4];
				$pais = $exibirRegistros[5];
				$profissao = $exibirRegistros[6];

			

			
			print "$nome<br>";
			print "$email<br>";
			print "$telefone<br>";
			print "$pais<br>";
			print "$profissao";

			print "<article><br>";



			print "</article>";

			}


		 ?>
		
	
	
	

	
		</section>
		<aside id="lateral">

	

	</aside>
	<footer id="rodape">
	<P><b>Copyringth &copy;2019- by</b> <b>FreeWork-Service</b><br><a href="http://0.Facebook.com" target="_blank"></a>
	<a href="http://twitter.com" target="_blank"></P>
	</footer>


	









</div>

</body>
</html>