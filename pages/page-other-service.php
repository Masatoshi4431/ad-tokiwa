<?php  
	/* Template Name: その他のサービス */ 
	include_once( STYLESHEETPATH . '/assets/data/service.php');
?>
<?php get_header("pages"); ?>

<main class="main service other-service js-headerMain js-target-area">

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
			<div class="heading">
				<p class="text-center">常磐広告では各部門に精通したスタッフが在籍しており、看板にかかわる全てのサービスを提供しております。<br>メンテナンス、点検、看板撤去・移設から屋外広告物申請代行、看板用地交渉、電気申請、デザイン、出力等幅広くご対応させていただきます。<br>また、外注先や業務提携先をお探しの企業様のお手伝いも承っております。</p>	
			</div>
		</div>	
	</section>

	<section class="section">
		<div class="thumbnail">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/other-service/thumbnail.jpg" alt="">
		</div>
	</section>	

	<section class="section">
		<div class="section_inner">
			<h2 class="section-title">Line up</h2>
			<h3  class="section-lead">その他サービス一覧</h3>
			<ul class="serviceLineup">
				<?php foreach($otherService as $key) : ?>
					<li class="serviceLineupBox">
						<dl>
							<dt><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/other-service/<?php echo $key['img']; ?>.jpg" alt="<?php echo $key['title']; ?>"></dt>
							<dd>
								<h4><?php echo $key['title']; ?></h4>
								<p><?php echo $key['text']; ?></p>
							</dd>
						</dl>
					</li>
				<?php endforeach; ?>								
			</ul>				
		</div>
	</section>
	
</main>

<?php get_footer(); ?>