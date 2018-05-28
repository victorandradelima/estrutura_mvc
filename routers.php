<?php
$routes = array();

//Sempre lembrar de tomar cuidade para não criar rotas direto com a cheve
//isso vai te abrigar a´ter uma rota prar toda páginas, exemplo:
//$routes['{exemplo}'] = '/exemplo/abrir/';

//Rota padrão para acesso da home
$routes['home/index'] = '/home/index';

//Exemplo de rota direto no controller exemploe
$routes['/exemplo'] = '/exemplo';

//Exemplo de routes usada no controller ExemploAction
$routes['/exemplo/{id}'] = '/exemplo/exemploAction/:id';



