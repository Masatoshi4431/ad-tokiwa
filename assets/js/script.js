$(function() {

    var $opening      = $(".js-opening");
    var $opening_logo = $(".js-opening-logo");
    var $opening_text = $(".js-opening-text");

/*================================================================

    オープニングアニメーション

=================================================================*/
    setTimeout(function(){
        $opening_logo.fadeIn(500);
    },500);

    setTimeout(function(){
        $opening_logo.fadeOut(500);
    },2000);

    setTimeout(function(){
        $opening_text.fadeIn(1000);
    },3000);

    setTimeout(function(){
        $opening.fadeOut(1000);
    },5800);

});