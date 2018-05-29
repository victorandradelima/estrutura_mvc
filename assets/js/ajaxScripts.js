//Essa função tem como finalidade fazer uma requisição Ajax, que foi solicitada na view home
$(function () {
	$('button').on('click', function(){
		//alert('Para teste de funcionamento');
		var exemploAjaxVal = $('#exemploInputAjax').val();
		$.ajax({
			url: 'ajax',
			type: 'POST',
			data:{'exemploAjaxVal': exemploAjaxVal},
			//A linha abaixo serve para quando enviarmos o resultado da função como json
			//Para entender mais observe o final do ajaxController
			//dataType:'json',
			success: function(r){
				$('.borda').html(r);
				//Quando for json use o formato abaixo
				//$('.borda').html(r.imprimeExemploAjax);

			}


		})

		//Outra maneira de fazer o ajax via método $.post()
		/*$.post("ajax", dados+"&page="+page, function(data) {
        	console.log(data);
    	});*/
	});
})