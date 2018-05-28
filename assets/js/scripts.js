/*Arquivo de scripts padrão*/

//alert('Exemplo de alerta para teste');




$(function () {
	$('button').on('click', function(){
		alert('teste');
		var exemploAjaxVal = $('#exemploInputAjax').val();
		$.ajax({
			url: 'ajax',
			type: 'POST',
			data:{'exemploAjaxVal': exemploAjaxVal},
			success: function(r){
				$('.borda').html(r);
			}

		})

		/*$.post("ajax", dados+"&page="+page, function(data) {

        	console.log(data);

    	});*/
	});
})