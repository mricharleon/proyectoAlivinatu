function updateBackground() {
    anchoPantalla = $(window).width();
    altoPantalla = $(window).height();

    $(imgportada).css({'margin-top':'-10px'});
    $("#cajaPortada").css({'position':'relative', 'width':'100%'});

    if (anchoPantalla < "1000"){
        $(imgportada).height("265px");
        $(imgportada).width("auto");
    }else{
        $(imgportada).height("auto");
        $(imgportada).width("100%");
    }

    // Si a la imagen le sobra anchura, la centramos a mano
    if ($(imgportada).width() > 0) {
        $(imgportada).css('left', (anchoPantalla - $(imgportada).width()) / 2);
        $(anuncio).css('left', ((anchoPantalla - 948) / 2) );
    }
}
        
function toggle(n){
    $('#botonOferta'+n).on('click',function(){
        for(var i=0; i<6; i++){
            if (i!=n){
                $('#contenidoItemOferta' + i).hide(400);
            }else{
                $('#contenidoItemOferta'+n).slideToggle(500);
            }
        }
    });
}
        
        
        
$(document).ready(function() {
    var n, columna;

    for(var i=0; i<6; i++){
        $('#contenidoItemOferta' + i).hide();
    }

    $('#botonOferta').on('click',toggle(0));
    $('#botonOferta').on('click',toggle(1));
    $('#botonOferta').on('click',toggle(2));
    $('#botonOferta').on('click',toggle(3));
    $('#botonOferta').on('click',toggle(4));
    $('#botonOferta').on('click',toggle(5));

    /* funcion para controlar el tamaño de la img de bienvenida */     
    updateBackground();
    
    $(window).bind("resize", function() {
        updateBackground();
    });
});
