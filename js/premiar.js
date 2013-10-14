$(document).ready(function(){
    var hit = $.cookie("hit");
    if(hit == 'true'){
        $('.numeroHits').attr('data-premio', 'v');
        $('.numeroHits').css('background-position', '-276px');
        var iu = tp_url + '/img/BTNPremialoConteoACTIVE.png'
        $('.cajaHit').css('background-image', 'url('+iu+')');
        $('.redesShare').css('display', 'block');
    }
});

function premiar(id_post){
    var h = $('#hit-' + id_post).attr('data-premio');
    if(h == 'f'){
        var json_to_send = {action : 'premialo', post_id : id_post};
        var uri = wp_url + '/wp-admin/admin-ajax.php';
        $.ajax({
            url : uri,
            type : 'POST',
            data : json_to_send,
            success : function(data){
                $('.numeroHits p, .cajaHit').html(data);
                $('.numeroHits').css('background-position', '-276px');
                $.cookie('hit', 'true', { expires: 30 });
                $('.numeroHits').attr('data-premio', 'v');
                var iu = tp_url + '/img/BTNPremialoConteoACTIVE.png'
                $('.cajaHit').css('background-image', 'url('+iu+')');
                $('.redesShare').css('display', 'block');

            }
        });
    }
}