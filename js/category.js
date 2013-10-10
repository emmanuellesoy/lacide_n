/*Cambia texto de filtros al ser seleccionado un filtro. */
$(document).ready(function(){
    $('#listasOrdena p').click(function(){
        $('#textoOrdena').html($(this).html());
        $('#listasOrdena').slideUp();
    });
    $('#listasFiltro p').click(function(){
        $('#textoFiltra').html($(this).html());
        $('#resultadosElementos').attr('data-filtro', $(this).attr('data-filter'));
        $('#listasFiltro').slideUp();
    });
});

/* Aparece la lista de filtros o de orden segúns sea el caso */
function aparecerOrden(tipo){
    if(tipo == 'or'){
        $('#listasOrdena').slideToggle();
    } else {
        $('#listasFiltro').slideToggle();
    }
}

//$(document).ready(function()){
	/* Trae el numero de veces compartido en twitter*/
/*    $('.twtmb').each(function() {
        var id = $(this).attr('data-url');
        var data_id = $(this).attr('data-id');
        var uri_t = 'http://urls.api.twitter.com/1/urls/count.json?url='+id;
        $.ajax({
            url: uri_t,
            dataType: 'jsonp',
            success: function(data){
                if(data.count){
                    $('#'+data_id+' p').html(data.count);
                } else {
                    $('#'+data_id+' p').html('0');
                }
            }
        });
    });	
}*/

function traer_mas(query)
{
	var pg = $('.verMasResultados').attr('data-paged');
	var ps = $('.verMasResultados').attr('data-pages');
    $('.verMasResultados').html('Cargando...');
    $('.verMasResultados').attr('disabled', 'disabled');
	query = query + '&paged=' + pg;
	pg = parseInt(pg) + parseInt(1);
	var json_to_send = {action : 'traer_mas', query : query};
    var uri = wp_url+'/wp-admin/admin-ajax.php';
	$.ajax({
	    url : uri,
	    type : 'POST',
	    data : json_to_send,
	    success : function(data){
	        $('#resultadosElementos').append(data);
	        $('.verMasResultados').attr('data-paged', pg);
        	ps = parseInt(ps) - parseInt(1);
            if(ps > 0){
		        $('.verMasResultados').attr('data-pages', ps);
		        $('.verMasResultados').html('Ver más resultados');
	            $('.verMasResultados').removeAttr('disabled');
    	    } else {
		        $('.verMasResultados').hide();
		    }
            $('#resultadosElementos').mixitup('remix', $('#resultadosElementos').attr('data-filtro'));
            $('#textoOrdena').html('Más recientes');
	    }
	});
}