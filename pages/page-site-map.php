<?php  
	/* Template Name: サイトマップ */ 
?>
<?php get_header("pages"); ?>

<main class="main siteMap js-headerMain js-target-area">

	<section class="pageVisual">
		<div class="pageVisualBox">
			<div class="pageVisualBoxHead">
				<h1><?php echo get_post_meta($post->ID, 'page_title', true); ?></h1>
				<h2><?php echo get_post_meta($post->ID, 'page_lead', true); ?></h2>
			</div>
		</div>
		<div class="pageVisualThumb">
			<?php the_post_thumbnail(); ?>
		</div>
	</section>

	<section class="section">
		<div class="section_inner">
			<div class="siteMapList">
				<ul class="siteMapList_column">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
					<li><a href="<?php echo esc_url( home_url( '/company/' )); ?>">会社概要</a></li>
				</ul>
				
				<ul class="siteMapList_column">
					<li><a href="<?php echo esc_url( home_url( '/service/' )); ?>">取り扱いサービス</a>
						<ul class="siteMapList_service">
							<li><a href="<?php echo esc_url( home_url( '/service/road-sign/' )); ?>">ロードサイン</a></li>
							<li><a href="<?php echo esc_url( home_url( '/service/production/' )); ?>">看板製作</a></li>
							<li><a href="<?php echo esc_url( home_url( '/service/jr-advertisement/' )); ?>">JR広告</a></li>
							<li><a href="<?php echo esc_url( home_url( '/service/other-service/' )); ?>">その他サービス</a></li>
							<li><a href="<?php echo esc_url( home_url( '/works/' )); ?>">製作実績</a></li>
						</ul>
					</li>
				</ul>

				<ul class="siteMapList_column">
					<li><a href="<?php echo esc_url( home_url( '/ad-recruit/' )); ?>">空き看板情報</a></li>
					<li><a href="<?php echo esc_url( home_url( '/rent-land/' )); ?>">土地活用</a></li>
					<li><a href="<?php echo esc_url( home_url( '/faq/' )); ?>">よくある質問</a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' )); ?>">お問い合わせ</a></li>
					<li><a href="<?php echo esc_url( home_url( '/site-policy/' )); ?>">サイトポリシー</a></li>
					<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' )); ?>">個人情報保護方針</a></li>
					<li><a href="<?php echo esc_url( home_url( '/site-map/' )); ?>">サイトマップ</a></li>
				</ul>
			</div>
			
			
			
		</div>	
	</section>

</main>

<?php get_footer(); ?>