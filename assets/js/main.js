$(function() {
/*=================================================================

    記事のタブ切り替え

================================================================= */
    var $tab_content  = $(".js-tab");
    var $tab_list_1st = $(".js-tabList-first");
    var $tab_box_1st  = $(".js-tabBox-first");
    var $tab_list     = $(".js-tabList");

    $(document).ready(function() {
        $tab_content.hide();
        $tab_list_1st.addClass("is-active").show();
        $tab_box_1st.show();

        $tab_list.on('click', function() {
            $tab_list.removeClass("is-active");
            $(this).addClass("is-active");
            $tab_content.hide();
            
            var activeTab = $(this).find("a").attr("href");
            $(activeTab).fadeIn();

            return false;
        });
    });

/*=================================================================

    スマホメニュー

================================================================= */
    var $spHeaderMenu_toggle = $(".js-spHeaderMenu-toggle");
    var $spHeaderMenu        = $(".js-spHeaderMenu");
    
    $spHeaderMenu_toggle.on('click',function(){
        $spHeaderMenu_toggle.toggleClass('is-active');
        $spHeaderMenu.toggleClass("is-open");
    });

/*=================================================================

    画面遷移時のアニメーション

================================================================= */
    
    var $page_transition   = $(".js-page-transition");

    $page_transition.fadeIn(2000);


/*=================================================================

    header ホバーメニュー

================================================================= */    

    var $menu    = $(".js-hover");
    var $submenu = $(".js-hover-menu");

    $menu.mouseover(function(){
        $(this).children(".js-hover-menu").stop().slideDown();
     });

    $menu.mouseout(function(){
        $submenu.stop().slideUp();
    });

/*=================================================================

    アコーディオン

================================================================= */

    var $accodionList = $(".js-accordion");
        
    $accodionList.on('click', function(){
        $(this).next().slideToggle(200);
        $(this).toggleClass("is-active");
    });

/*=================================================================

    アンカーリンク

================================================================= */

    var $anchor = $('.js-anchor a[href^="#"]');

    $anchor.on('click', function(){
        var adjust   = 80;
        var speed    = 300;
        var href     = $(this).attr("href");
        var target   = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - adjust;

        $('body,html').animate({scrollTop:position}, speed, 'swing');

        return false;
    });

/*==============================================================

    header固定スクロール

===============================================================*/
    var beforePos     = 0;
    var $headerScroll = $(".js-headerScroll");

    function scrollAnime() {
        var elemTop = $(".js-headerMain").offset().top;
        var scroll  = $(window).scrollTop();

        if(scroll == beforePos) {
           
        } else if(elemTop > scroll || 0 > scroll - beforePos) {
            $headerScroll.removeClass("is-upMove");
            $headerScroll.addClass("is-downMove");
            $spHeaderMenu_toggle.removeClass('is-active');
            $spHeaderMenu.removeClass("is-open");
        } else {
            $headerScroll.addClass("is-upMove");
            $headerScroll.removeClass("is-downMove"); 
            $spHeaderMenu_toggle.removeClass('is-active');
            $spHeaderMenu.removeClass("is-open");         
        }
        beforePos = scroll;
    }

    $(window).scroll(function() {
        scrollAnime();
    });

    $(window).on('load', function() {
        scrollAnime();
    });

/*==============================================================

    header スマホメニュー

=============================================================== */
    var $header_trigger = $(".js-header-trigger");
    var $header_menu    = $(".js-header-menu");

    $header_trigger.on('click', function() {
        $(this).toggleClass("is-active");

        if($(this).hasClass("is-active")) {
            $header_menu.addClass("is-active");
        } else {
            $header_menu.removeClass("is-active");
        }
    });

    $header_menu.on('click', function() {
        $header_menu.removeClass("is-active");
        $header_trigger.removeClass("is-active");
    });

/*==============================================================

   mainvisual 【ページスクロール】

=============================================================== */
    var $window = $(window);
    var $scroll = $(".js-scroll a");

    $window.on('load resize' , function() {
        var targetY = $window.height();

        $scroll.on('click', function() {
            $("html, body").stop().animate({scrollTop: targetY}, 500, 'swing');
            return false;
        });
    });
    
});

$(function() {
/*=================================================================

    header 切り替え

================================================================= */

    var $win          = $(window);
    var $targetArea   = $(".js-target-area");
    var $headerChange = $(".js-header-change");

    $(window).on('load scroll' , function() {
        var scrollTop = $win.scrollTop();
        var areaTop   = $targetArea.offset().top;

        if(scrollTop > areaTop && scrollTop) {
            $headerChange.addClass("is-change");
        } else {
            $headerChange.removeClass("is-change");
        }
    });

/*=================================================================

    記事一覧 タブ切り替え

================================================================= */
    var $tab_list    = $(".js-tab-list");
    var $tab_content = $(".js-tab-contet"); 

    $tab_list.on('click', function() {
        var index = $tab_list.index(this);
        $tab_content.css('display','none');
        $tab_content.eq(index).css('display','block');
        $tab_list.removeClass("is-select");
        $(this).addClass('is-select');
    });

/*=================================================================

    OPENING アニメーション

================================================================= */
    setTimeout(function(){
        $('.js-opening-logo').fadeIn(1000);
    },500);

    setTimeout(function(){
        $('.js-opening-logo').fadeOut(500);
    },2000);

    setTimeout(function(){
        $('.js-opening-text').fadeIn(2000);
    },3000);

    setTimeout(function(){
        $('.js-opening').fadeOut(1000);
    },5500);

});

