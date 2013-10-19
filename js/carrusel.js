var t;
var frame;
$(document).ready(function(){
    setTimeout(function(){
        timer(0);
    },5000);
});

function Slider(id, ide, dir){
    //alert(ide + id);
    /*
    for(var i = 0; i <= 3; i++){
        var to_hide = ide + i;
        $(to_hide).hide('slide', { direction: 'left' }, 'slow');
    }
    */
   var to_hide = ide + id;
   $(to_hide).hide('slide', { direction: 'left' }, 'slow', function(){
        id = parseInt(id);
        var to_show = '';
        if(dir === 'd'){
            if(id === 3){
                to_show = ide + 0;
            } else {
                to_show = ide + (id + 1);
            }
            frame = to_show;
            $(to_show).show('slide', { direction: 'right' },  'slow');
        } else {
            if(id === 0){
                to_show = ide + 3;
            } else {
                to_show = ide + (id - 1);
            }
            $(to_show).show('slide', { direction: 'right' }, 'slow');
        }
   });
    //alert(to_hide + ' | ' + id);
    
}

function mostrar_cuadro(id, ide){
    for(var i = 0; i <= 3; i++){
        var to_hide = ide + i;
        $(to_hide).hide('slide');
    }
    var to_show = ide + id;
    $(to_show).show('slide');
}

function timer(id){
    Slider(id, '#cuadro-', 'd');
    if(id === 3){
        id = 0;
    } else {
        id = parseInt(id) + 1;
    }
    t = setTimeout(function(){
        timer(id);
    },5000);
}

function stopCount(id)
{
  clearTimeout(t);
  $('.primer-cuadro-post').hide('slide', { direction: 'left' }, 'slow');
  $('#cuadro-' + id).show('slide', { direction: 'right' }, 'slow');
  setTimeout(function(){
        timer(id);
    },5000);
}

/* Carrusel para el tráfico */
function slideTraficoIzq(){
    $('.trafico-post-wrapper-0').hide('slide', {direction: 'right'}, 'slow', function(){
        $('.trafico-post-wrapper-1').show('slide', {direction: 'left'}, 'slow');
    });

}
function slideTraficoDer(){
    $('.trafico-post-wrapper-1').hide('slide', {direction: 'left'}, 'slow', function(){
        $('.trafico-post-wrapper-0').show('slide', {direction: 'right'}, 'slow');
    });
}

function cambiar_seccion(mostrar, ocultar){
    $('.' + ocultar).hide();
    $('.' + mostrar).show();
}