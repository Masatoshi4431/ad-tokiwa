$(function() {
/*================================================================

    オープニングアニメーション

=================================================================*/
    var $opening      = $(".js-opening");
    var $opening_logo = $(".js-opening-logo");
    var $opening_text = $(".js-opening-text");
    var $movieStrat   = $(".js-movie");

    setTimeout(function(){
        $opening_logo.fadeIn(1000);
    },500);

    setTimeout(function(){
        $opening_logo.fadeOut(1000);
    },2000);

    setTimeout(function(){
        $opening_text.fadeIn(1000);
    },3000);

    setTimeout(function(){
        $opening.fadeOut(1000);
    },5800);

    $movieStrat.delay(6000).queue(function(next) {
        $movieStrat.get(0).play();
        next();
    });

/*=================================================================

    画面遷移時のアニメーション

================================================================= */
    
    var $pageTransition   = $(".js-pageTransition");

    $pageTransition.fadeIn(2000);
    

/*================================================================

    ページ用ヘッダー

=================================================================*/

    var $pageHeader = $(".js-pageHeader");
    
    function headerFixedAnime() {
        var headerH = $pageHeader.outerHeight(true);
        var scroll  = $(window).scrollTop();
        if (scroll  >= headerH) {
            $pageHeader.addClass("is-fixed");
        }else{
            $pageHeader.removeClass("is-fixed");
        }
    }

    $(window).on('scroll', function () {
        headerFixedAnime();
    });

    $(window).on('load', function () {
        headerFixedAnime();
    });

/*================================================================

    ヘッダー　ドロップダウンメニュー

=================================================================*/
    var $headerHover     = $(".js-headerHover");
    var $headerHoverMenu = $(".js-headerHoverMenu");

    $headerHover.mouseover(function(){
        $(this).children(".js-headerHoverMenu").stop().slideDown();
     });

    $headerHover.mouseout(function(){
        $headerHoverMenu.stop().slideUp();
    });

/*=================================================================

    スマホメニュー

================================================================= */
    var $spHeaderMenu_toggle = $(".js-headerToggle");
    var $spHeaderMenu        = $(".js-headerToggleMenu");
    
    $spHeaderMenu_toggle.on('click',function(){
        $spHeaderMenu_toggle.toggleClass('is-active');
        $spHeaderMenu.toggleClass("is-open");
    });

/*=================================================================

    header 切り替え

================================================================= */

    var $targetArea   = $(".js-target-area");
    var $headerChange = $(".js-header-change");

    $(window).on('load scroll' , function() {
        var scrollTop = $(window).scrollTop();
        var areaTop   = $targetArea.offset().top;

        if(scrollTop > areaTop && scrollTop) {
            $headerChange.addClass("is-change");
        } else {
            $headerChange.removeClass("is-change");
        }
    });

    var $postNav = $(".js-postNav");

    $postNav.each(function(){
        var $href = $(this).attr('href');

        if(location.href.match($href)) {
            $(this).parent().addClass('is-current');
        } else {
            $(this).parent().removeClass('is-current');
        }
    });

});