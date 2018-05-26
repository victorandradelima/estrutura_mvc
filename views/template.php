<!DOCTYPE html>
<html>
<head>
	<title>Meu Site</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>assets/css/style.css">
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/scripts.js"></script>
</head>
<body>
<nav>
	<a href="<?php echo BASE_URL ?>">Home</a> | 
	<a href="<?php echo BASE_URL ?>exemplo">Exemplo</a> | 
	<a href="<?php echo BASE_URL ?>exemplo/exemploAction">Exemplo Action</a> </nav>
<hr>

<?php
	//Aqui carregaremos a view que foi selecionada para este template
	$this->loadViewInTemplate($viewName, $viewData);
?>


<hr>
<footer>Aqui é o rodapé do site</footer>
</body>
</html>