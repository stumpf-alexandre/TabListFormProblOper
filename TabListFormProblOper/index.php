<!DOCTYPE html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
<title>Estrutura de Página Tableless</title>
<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>

<div class="container">

<header>
   <h1>Minha Pagina</h1>
</header>
  
<nav>
	<h2>
	<ul>
		<li><a href="?m=h">Home</a></li>
		<li><a href="?m=l">Lista</a></li>
		<li><a href="?m=f">Formulario</a></li>
		<li><a href="?m=t">Tabela</a></li>
		<li><a href="?m=o">Operadores</a></li>
		<li><a href="?m=p">Problema</a></li>
		<li><a href="?m=r">Form</a></li>
		<li><a href="?m=lc">Lista de Clientes</a></li>
	</ul>
	</h2>
</nav>

<article>
	<?php 
				if(!isset($_GET['m']))
					require_once('home.php');
				else{
					switch($_REQUEST['m']){
									
						case 'h':
						require_once('home.php');
						break;
						
						case 'f':
						require_once('formulario.php');
						break;					
						
						case 't':
						require_once('tabela.php');
						break;			
					
						case 'l':
						require_once('lista.php');
						break;	
						
						case 'o':
						require_once('operadores.php');
						break;
						
						case 'p':
						require_once('problema.php');
						break;
						
						case 'r':
						require_once('form.php');
						break;
						
						case 'lc':
						require_once('listaclientes.php');
						break;
						
						case 'ldc':
						require_once('listadetalheclientes.php');
						break;
					}
				}
	?>
</article>

<footer>Copyright &copy; W3Schools.com</footer>

</div>

</body>
</html>