$(document).ready(function(){
	
	sumirElemento($('.alert'));
	
	$('.edit').on('click', function(e){
		e.preventDefault();
		
		$.confirm({
			title: 'Editar',
			content: '' +
			'<form action="" class="formName">' +
			'<div class="form-group">' +
			'<label>Nome:</label>' +
			'<input type="text" placeholder="Primeiro nome" class="name form-control" required />' +
			'<label>Sobrenome:</label>' +
			'<input type="text" placeholder="Sobrenome" class="name form-control" required />' +
			'</div>' +
			'</form>',
			buttons: {
				formSubmit: {
					text: 'Submit',
					btnClass: 'btn-blue',
					action: function () {
						var name = this.$content.find('.name').val();
						if(!name){
							$.alert('provide a valid name');
							return false;
						}
						$.alert('Your name is ' + name);
					}
				},
				cancel: function () {
					//close
				},
			},
			onContentReady: function () {
				// bind to events
				var jc = this;
				this.$content.find('form').on('submit', function (e) {
					// if the user submits the form by pressing enter in the field.
					e.preventDefault();
					jc.$$formSubmit.trigger('click'); // reference the button and click it
				});
			}
		});
		
	});
	
	$('.delete').on('click', function(e){
		e.preventDefault();
		var formulario = $(this);
		$.confirm({
			title: 'AVISO!',
			content: 'Você tem certeza que deseja excluir este usuário?',
			type: 'red',
			typeAnimated: true,
			buttons: {
				tryAgain: {
					text: 'Confirmar',
					btnClass: 'btn-red',
					action: function(){
						
						formulario.submit();
						
					}
				},
				Cancelar: function () {
				}
			}
		});
		
	});
	
});

function sumirElemento(elemento){
	
	setTimeout(function(){
			
		elemento.fadeOut('slow');
		
	}, 1000);
	
}