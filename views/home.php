<h1>Variável que retorna valor de função:  <?php echo $retornoValor; ?></h1>
<h1>Variável da quantidade de anuncios no banco de dados: <?php echo $retornoValorDoBanco; ?></h1>
<h1>Variável retornada direto do model:  <?php echo $retornoVariavel; ?></h1>
<img width="200px" src="<?php echo BASE_URL ?>assets/images/victorlima.png">
<hr>

<!--
O ajax no MVC segue os seguintes passos:
1 - A partir dessa view voce faz uma requisição para uma função js
2 - Essa função js utiliza a pripriedade $.ajax() do jquery para iniciar a requisição
3 - Essa requisição acessa um link via url, ou seja, uma url no MVC
4 - O direcionamento dessa URL se encontra no ajaxController (neste exemplo usamos o index mesmo)
5 - Neste controller, caso necessário chamamos models, inclusive que fazem conexão com BD
6 - Por fim chamamos uma view específica para aquela action do controller ajax
7 - Essa view será impressa no local definida la no inicio na junção js chamada
8 - Se vc não for usar banco, pode fazer tudo no controller, sem precisar de viu para imprimir
-->
<input type="text" name="exemploInputAjax" id="exemploInputAjax" placeholder="Exemplo input ajax:" >
<button>Enviar</button>
<div class="borda" style="border: solid 1px #f00; padding: 20px; margin-top: 20px;">
	
</div>