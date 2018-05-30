<!DOCTYPE html>
<html>
<head>
	<title>Meu Site</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/scripts.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/ajaxScripts.js"></script>
</head>
<body>
<nav>
	<a href="<?php echo BASE_URL ?>">Home</a> | 
	<a href="<?php echo BASE_URL ?>exemplo">Exemplo</a> | 
	<a href="<?php echo BASE_URL ?>exemplo/exemploAction">Exemplo Action</a> |
	<a href="<?php echo BASE_URL ?>paginacao">Exemplo paginação</a> 
</nav>
<hr>
<h1>Template para a Home</h1>
<?php
	//Aqui carregaremos a view que foi selecionada para este template
	$this->loadViewInTemplate($viewName, $viewData);
?>


<hr>
<footer>Aqui é o rodapé do site</footer>
</body>
</html>