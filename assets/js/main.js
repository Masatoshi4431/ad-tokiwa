$(function() {
/* ================================================================

    ページ内リンク

==================================================================*/
    var $faqAnchorLink = $(".js-faq-anchor li a");
    var $bodyHtml      = $("body,html");

    $faqAnchorLink.on('click', function() {
        var elmHash = $(this).attr('href');
        var pos     = $(elmHash).offset().top-100;

        $bodyHtml.animate({
            scrollTop: pos
        },500);

        return false;
    });

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

});

