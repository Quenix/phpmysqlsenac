$(document).ready(function(){
	
	$('.delete').on('click', function(e){
		e.preventDefault();
		var formulario =$(this);
		
		$.confirm({
			title: 'AVISO',
			content: 'você tem certeza',
			type: 'red',
			typeAnimated: true,
			buttons: {
				tryAgain: {
					text: 'confirmar',
					btnClass: 'btn-red',
					action: function(){
						formulario.submit();
					}
				},
				close: function () {
				}
			}
		});
	});
	
});