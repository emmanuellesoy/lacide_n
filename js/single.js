$(document).ready(function()
{
	var exau = $('.entry_author_image').html();
	if(exau == ''){
		$('.autorNota').hide();
		$('.bannerOpc').show();
	}
});

function aumentar_texto()
{
	var puntaje = $('.notaSencillaTexto').css('font-size');
    if(parseInt(puntaje) <= 23){
        puntaje = (parseInt(puntaje) + parseInt(2));
        $('.notaSencillaTexto').css({'font-size': puntaje});
    }
}
function reducir_texto()
{
	var puntaje = $('.notaSencillaTexto').css('font-size');
    if(parseInt(puntaje) >= 17){
        puntaje = (parseInt(puntaje) - parseInt(2));
        $('.notaSencillaTexto').css({'font-size': puntaje});
    }
}

function imprimir_texto()
{
	window.print();
}