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
	})(window,document,'script','dataLayer','GTM-PQDS9ZP');</script>
	<!-- End Google Tag Manager -->
</head>
<body>
	
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQDS9ZP"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php /*
	<div class="openingAnime js-opening">
    	<div class="openingAnime_logo js-opening-logo">
    		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/tokiwa-logo.png" alt="">
		</div>
	</div>
	*/ ?>

	<?php echo $masterLink; ?>

	<header class="header js-headerScroll js-header-change">
		<div class="header_inner">
			<h1 class="header_logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_white.png" alt="株式会社常磐広告" class="is-before">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="株式会社常磐広告" class="is-after">
				</a>
			</h1>
			<div class="headerNav">
				<ul>
					<li><a href="/ad-tokiwa/company/">会社概要</a></li>
					<li class="js-hover"><a href="/ad-tokiwa/service/">取扱サービス</a>
						<div class="pageHeaderNavSub js-hover-menu">
							<div class="pageHeaderNavSubArea">
								<div class="pageHeaderNavSubHead">
									<p class="pageHeaderNavSubHead_title">Service</p>
									<p class="pageHeaderNavSubHead_lead">取扱サービス</p>
								</div>
								<div class="pageHeaderNavSubList">
									<p><a href="/ad-tokiwa/service/">取り扱いサービスTOP</a></p>
								</div>
								<div class="pageHeaderNavSubList">
									<p><a href="/ad-tokiwa/service/road-sign/">ロードサイン</a></p>
									<p><a href="/ad-tokiwa/service/production/">看板製作</a></p>
								</div>
								<div class="pageHeaderNavSubList">
									<p><a href="/ad-tokiwa/service/jr-advertisement/">JR広告</a></p>
									<p><a href="/ad-tokiwa/service/other-service/">その他サービス</a></p>
								</div>
								<div class="pageHeaderNavSub_img">
									<img src="https://conrize-demo.net/ad-tokiwa/wp-content/themes/conrize/module/images/common/drop-down-1.png" alt="">
								</div>
							</div>
						</div>
					</li>
					<li><a href="/ad-tokiwa/rent-land/">土地活用</a></li>
					<li><a href="/ad-tokiwa/works/">製作実績</a></li>
					<li><a href="/ad-tokiwa/faq/">よくある質問</a></li>
					<li><a href="/ad-tokiwa/contact/">お問い合わせ</a></li>
					<li>
						<ul class="pageHeaderNavSocial">
							<li><a href="https://www.facebook.com/tokiwa1976/" target="_blank"><i class="fab fa-facebook-square icon-size"></i></a></li>
							<li><a href="https://www.instagram.com/tokiwa_1976/" target="_blank"><i class="fab fa-instagram icon-size"></i></a></li>
						</ul>
					</li>							
				</ul>
			</div>
			<div class="pageHeaderNav">
				<ul class="js-headerNav-target">
					<li><a href="/ad-tokiwa/company/">会社概要</a></li>
					<li class="js-hover"><a href="">取扱サービス</a>
						<div class="pageHeaderNavSub js-hover-menu">
							<div class="pageHeaderNavSubArea">
								<div class="pageHeaderNavSubHead">
									<p class="pageHeaderNavSubHead_title">Service</p>
									<p class="pageHeaderNavSubHead_lead">取扱サービス</p>
								</div>
								<div class="pageHeaderNavSubList">
									<p><a href="/ad-tokiwa/service/">取り扱いサービスTOP</a></p>
								</div>
								<div class="pageHeaderNavSubList">
									<p><a href="/ad-tokiwa/service/road-sign/">ロードサイン</a></p>
									<p><a href="/ad-tokiwa/service/production/">看板製作</a></p>
								</div>
								<div class="pageHeaderNavSubList">
									<p><a href="/ad-tokiwa/service/jr-advertisement/">JR広告</a></p>
									<p><a href="/ad-tokiwa/service/other-service/">その他サービス</a></p>
								</div>
								<div class="pageHeaderNavSub_img">
									<img src="https://conrize-demo.net/ad-tokiwa/wp-content/themes/conrize/module/images/common/drop-down-1.png" alt="">
								</div>
							</div>
						</div>
					</li>
					<li><a href="/ad-tokiwa/rent-land/">土地活用</a></li>
					<li><a href="/ad-tokiwa/works/">製作実績</a></li>
					<li><a href="/ad-tokiwa/faq/">よくある質問</a></li>
					<li><a href="/ad-tokiwa/contact/">お問い合わせ</a></li>
					<li>
						<ul class="pageHeaderNavSocial">
							<li><a href="https://www.facebook.com/tokiwa1976/" target="_blank"><i class="fab fa-facebook-square icon-size"></i></a></li>
							<li><a href="https://www.instagram.com/tokiwa_1976/" target="_blank"><i class="fab fa-instagram icon-size"></i></a></li>
						</ul>
					</li>							
				</ul>
			</div>
			<div class="sppageHeaderNav js-spHeaderMenu-toggle">
				<span></span><span></span><span></span>
			</div>				
		</div>
	</header>

	<div class="spHeaderMenu js-spHeaderMenu">
		<div class="spHeaderMenuBox">
			<ul class="spHeaderMenuList">
				<li><a href="/company/">会社概要</a></li>
				<li class="spHeaderMenuDown js-accordion">
					取り扱いサービス
					<span></span><span></span>
				</li>
				<li style="display: none;">
					<ul>
						<li><a href="/ad-tokiwa/service/">取扱いサービスTOP</a></li>
						<li><a href="/ad-tokiwa/service/road-sign/">ロードサイン</a></li>
						<li><a href="/ad-tokiwa/service/production/">看板製作</a></li>
						<li><a href="/ad-tokiwa/service/jr-advertisement/">JR広告</a></li>
						<li class="is-last"><a href="/ad-tokiwa/service/other-service/">その他サービス</a></li>
					</ul>
				</li>
				<li><a href="#">空き看板情報</a></li>
				<li><a href="/ad-tokiwa/rent-land/">土地活用</a></li>
				<li><a href="/ad-tokiwa/works/">製作実績</a></li>
				<li><a href="/ad-tokiwa/faq/">よくある質問</a></li>
				<li><a href="/ad-tokiwa/contact/">お問い合わせ</a></li>
			</ul>
		</div>
	</div>