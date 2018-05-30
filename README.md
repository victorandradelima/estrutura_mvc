# Estrutura Base para MVC (Base Structure for MVC)

Este projeto consiste em desenvolver um modelo otimizado para iniciar atividades de desenvolvimento web seguindo o padrão MVC, juntamente a isso, trazendo funcionalidades básicas para dev's também seguindo este padrão (Ajax, paginação, composer, etc.)

## Começando (Getting Started)

1 - Importar todos os arquivos que estão na pasta raiz 'estrutura_mvc'.

### Pré-requisitos (Prerequisites)

1 - Habilitar o mod_rewrite em seu servidor

<!--
```
Give examples
```
-->
### Instalando (Installing)

1 - Importar as tabelas do arquivo 'estrutura_mvc.sql' para o servidor de banco de dados escolhido escolhido.

2 - Para iniciar a utilização devemos fazer basicamente duas configurações básicas: no arquivo /config.php, editando os dados de conexão ao banco de dados e configurar o arquivo /.htaccess mudando o nome da pasta raiz na quarta linha.

```
/config.php
define("BASE_URL", "[edit]/");
	$config['dbname'] = '[edit]';
	$config['host'] = '[edit]';
	$config['dbuser'] = '[edit]';
	$config['dbpass'] = '[edit]';
```
```
/.htaccess
RewriteRule ^(.*)$ /[edit]/index.php?url=$1 [QSA,L]
```

## Executando os testes (Running the tests)

1 - Após a instalação, você deverá ter acesso na URL raiz do servidor a página principal.

2 - Inicialmente deverá encontrar um menu superior carregado no template da página e abaixo algumas variáveis retiradas ou direto do controlador ou vindas do banco de dados instalado, caso alguns destes dados não apareça ou ocorra um erro, provavelmente você deverá reavaliar os passos da instalação.

3 - No final da página inicial (home) haverá um input, para testar a funcionalidade de ajax incorporada, verifique se funciona normalmente

4 - Na página exemplo iremos ver algumas variáveis puxadas do controlador e banco de dados também, caso está página não funcione, pode ser que tenha ocorrido uma falha no arquivo routes.php

### Teste de Parâmentros (Test Parameters)

1 - Para testar se o push dos parâmetros pela url está funcionando, verifique a URL /exemplo, nela uma das variáveis é "puxada" a partir da URL
<!--
```
Give an example
```
-->
### Arquivos de estilo, scripts e marcação (Style, script, and markup files)

1 - Todos os arquivos estarão na pasta /assets

## Contruído com ... (Built With)

* [Sublime Text 3](https://www.sublimetext.com/3) - Editor de textos
* [XAMPP](https://www.apachefriends.org/) - Servidor local virtual

## Contribuindo (Contributing)

Por enquanto siga as premissas definidas pela plataforma do Github =)

<!--Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.-->

## Versionamento (Versioning)

Seguimos o padrão estipulado no projeto SemVer (http://semver.org/)

<!-- We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). -->

## Authors

* **Victor Lima** - *Início do Projeto* - [victorandradelima](https://github.com/victorandradelima)

<!--See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project. -->

## License

Este projeto está licenciado sob a licença MIT - O arquivo de licença está sendo desenvolvido ...
<!-- This project is licensed under the MIT License - o see the [LICENSE.md](LICENSE.md) file for details -->

## Agradecimentos (Acknowledgments)

* Obrigado aos mestre (https://github.com/RicardoBackEndPhp) e https://github.com/bonieky