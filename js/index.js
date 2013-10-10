$(document).ready(function(){
	var isChromium = !!window.chrome;
	if(isChromium == true){
		$('.estaPasando header, .estaPasando ul li a, .butaca-post-texto-descripcion, .notaSencillaEtiquetas>p>a').css('font-family', 'sans-serif');
	}
	$("#main_header").stick_in_parent();
    /* Acomodmamos textos de titulos, centrados verticalmente */
    //Nota reciente en Estadio
    $('.estadioNotaReciente a').each(function(){
	    var he = $(this).css('height');
	    he = parseInt(he);
	    var mg = 0;
	    mg = (70 - he) / 2;
	    $(this).css({'padding-top': mg+'px', 'padding-bottom': mg+'px'});
	});
	$('.estadioNota a').each(function(){
	    var he = $(this).css('height');
	    he = parseInt(he);
	    var mg = 0;
	    mg = (85 - he) / 2;
	    $(this).css({'margin-top': mg+'px'});
	});
	$('.kiosco-post-titulo a').each(function(){
	    var he = $(this).css('height');
	    he = parseInt(he);
	    var mg = 0;
	    mg = (64 - he) / 2;
	    $(this).css({'margin-top': mg+'px'});
	});
	$('.cabina-post-titulo a').each(function(){
	    var he = $(this).css('height');
	    he = parseInt(he);
	    var mg = 0;
	    mg = (59 - he) / 2;
	    $(this).css({'margin-top': mg+'px'});
	});
	$('.universidad-post-titulo a').each(function(){
	    var he = $(this).css('height');
	    he = parseInt(he);
	    var mg = 0;
	    mg = (59 - he) / 2;
	    $(this).css({'margin-top': mg+'px'});
	});
	$('.fronteraNota a').each(function(){
	    var he = $(this).css('height');
	    he = parseInt(he);
	    var mg = 0;
	    mg = (100 - he) / 2;
	    $(this).css({'padding-top': mg+'px', 'padding-bottom': mg+'px'});
	});
	$('.destacados a').each(function(){
	    var he = $(this).css('height');
	    he = parseInt(he);
	    var mg = 0;
	    mg = (60 - he) / 2;
	    $(this).css({'padding-top': mg+'px', 'padding-bottom': mg+'px'});
	});
	$('.postIt h2').each(function(){
	    var he = $(this).css('height');
	    he = parseInt(he);
	    var mg = 0;
	    mg = (133 - he) / 2;
	    $(this).css({'margin-top': mg+'px'});
	});
	/* Anterior siguiente de nota interna */
	$('.resumenNotaAnterior').each(function(){
	    var he = $(this).css('height');
	    he = parseInt(he);
	    var mg = 0;
	    mg = (57 - he) / 2;
	    $(this).css({'padding-top': mg+'px', 'padding-bottom': mg+'px'});
	});
	$('.resumenNotaSiguiente').each(function(){
	    var he = $(this).css('height');
	    he = parseInt(he);
	    var mg = 0;
	    mg = (57 - he) / 2;
	    $(this).css({'padding-top': mg+'px', 'padding-bottom': mg+'px'});
	});
	$('.tituloNotaAnterior a img').mouseover(function(){
		$(this).attr('src', tp_url+'/img/BTNNotaLargoAnteriorOVER.png');
	});
	$('.tituloNotaSiguiente a img').mouseover(function(){
		$(this).attr('src', tp_url+'/img/BTNNotaLargoSiguienteOVER.png');
	});
	$('.tituloNotaAnterior a img').mouseleave(function(){
		$(this).attr('src', tp_url+'/img/BTN NotaLargoAnterior.png');
	});
	$('.tituloNotaSiguiente a img').mouseleave(function(){
		$(this).attr('src', tp_url+'/img/BTN NotaLargoSiguiente.png');
	});
});

function ver_respuesta()
{
	$('.postIt h3').slideUp(1500);
	$('.postIt h4').slideDown(1500);
}