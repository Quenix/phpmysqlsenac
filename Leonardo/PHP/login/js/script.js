$(document).ready(function(){
	
	sumirElemento($('.alert'));

});

function sumirElemento(elemento){
	
	setTimeout(function(){
			
		elemento.fadeOut('slow');
		
	}, 1000);
	
}