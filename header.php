<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php bloginfo('name'); wp_title('|', true, 'right'); ?></title>
	<?php page_description(); ?>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@500;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Questrial&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet">
	<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500&display=swap" rel="stylesheet">
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W82S6TC');</script>
	<!-- End Google Tag Manager -->
</head>
<body>
	
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W82S6TC"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<div class="openingAnime js-opening">
    	<div class="openingAnime_logo js-opening-logo">
    		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/tokiwa-logo.png" alt="">
		</div>
		<div class="openingAnimeBox js-opening-text">
			<div class="mainvisualHeadArea">
				<div class="mainvisualHead">
					<h1 class="mainvisualHead_title"><span>看板の、</span>その先へ。</h1>
					<h2 class="mainvisualHead_lead">Beyond the sign.</h2>
					<h3 class="mainvisualHead_text">私たちは、消費者の方と直接的な結びつきはありません。<br class="is-pc">しかし、私たちの仕事はお客様のお客様なしに成り立ちません。<br>お客様の思いを、看板のその先へ伝える。<br>これが常磐広告の使命です。</h3>
				</div>
			</div>
		</div>
	</div>

	<header class="header js-pageHeader js-header-change">
		<div class="header_inner">
			<div class="header_logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_white.png" alt="株式会社常磐広告" class="is-before">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/tokiwa-logo.png" alt="株式会社常磐広告" class="is-after">
				</a>
			</div>
			<ul class="headerNav">
				<li><a href="<?php echo esc_url( home_url( '/company/' )); ?>">会社概要</a></li>
				<li class="js-headerHover"><a href="#">取り扱いサービス</a>	
					<div class="headerNavDownArea js-headerHoverMenu">
						<div class="headerNavDown">
							<div class="headerNavDownHead">
								<p class="headerNavDownHead_title">Service</p>
								<p class="headerNavDownHead_lead">取り扱いサービス</p>
							</div>
							<div class="headerNavDownMenu">
								<ul class="headerNavDownMenuList">
									<li><a href="<?php echo esc_url( home_url( '/service/' )); ?>">取扱いサービスTOP</a></li>
								</ul>
								<ul class="headerNavDownMenuList">
									<li><a href="<?php echo esc_url( home_url( '/service/road-sign/' )); ?>">ロードサイン</a></li>
									<li><a href="<?php echo esc_url( home_url( '/service/production/' )); ?>">看板製作</a></li>
								</ul>							
								<ul class="headerNavDownMenuList">
									<li><a href="<?php echo esc_url( home_url( '/service/jr-advertisement/' )); ?>">JR広告</a></li>
									<li><a href="<?php echo esc_url( home_url( '/service/other-service/' )); ?>">その他サービス</a></li>
								</ul>
							</div>
							<div class="headerNavDownMenuThumb">
								<img src="https://conrize-demo.net/ad-tokiwa/wp-content/themes/conrize/module/images/common/drop-down-1.png" alt="">
							</div>
						</div>
					</div>
				</li>
				<li><a href="<?php echo esc_url( home_url( '/ad-recruit/' )); ?>">空き看板情報</a></li>
				<li><a href="<?php echo esc_url( home_url( '/rent-land/' )); ?>">土地活用</a></li>
				<li><a href="<?php echo esc_url( home_url( '/faq/' )); ?>">よくある質問</a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact/' )); ?>">お問い合わせ</a></li>
				<li>
					<ul class="headerNavSocial">
						<li><a href="https://www.facebook.com/tokiwa1976/" target="_blank"><i class="fab fa-facebook-square icon-size"></i></a></li>
						<li><a href="https://www.instagram.com/tokiwa_1976/" target="_blank"><i class="fab fa-instagram icon-size"></i></a></li>
					</ul>
				</li>	
			</ul>
			<div class="topHeaderToggle js-headerToggle">
				<span></span><span></span><span></span>
			</div>			
		</div>
	</header>

	<div class="pageHeaderMenu js-headerToggleMenu">
		<div class="pageHeaderMenuBox">
			<ul class="pageHeaderMenuBoxList">
				<li><a href="<?php echo esc_url( home_url( '/company/' )); ?>">会社概要</a></li>
				<li class="pageHeaderMenuBoxList_accordion js-accordion">
					取り扱いサービス
					<span></span><span></span>
				</li>
				<li style="display: none;" class="is-service-menu">
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/service/' )); ?>">取扱いサービスTOP</a></li>
						<li><a href="<?php echo esc_url( home_url( '/service/road-sign/' )); ?>">ロードサイン</a></li>
						<li><a href="<?php echo esc_url( home_url( '/service/production/' )); ?>">看板製作</a></li>
						<li><a href="<?php echo esc_url( home_url( '/service/jr-advertisement/' )); ?>">JR広告</a></li>
						<li class="is-last"><a href="<?php echo esc_url( home_url( '/service/other-service/' )); ?>">その他サービス</a></li>
					</ul>
				</li>
				<li><a href="<?php echo esc_url( home_url( '/ad-recruit/' )); ?>">空き看板情報</a></li>
				<li><a href="<?php echo esc_url( home_url( '/rent-land/' )); ?>">土地活用</a></li>
				<li><a href="<?php echo esc_url( home_url( '/works/' )); ?>">製作実績</a></li>
				<li><a href="<?php echo esc_url( home_url( '/faq/' )); ?>">よくある質問</a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact/' )); ?>">お問い合わせ</a></li>
			</ul>
		</div>
	</div>		