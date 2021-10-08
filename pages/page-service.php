<?php  
	/* Template Name: Service */ 
	include_once( STYLESHEETPATH . '/assets/data/service.php');
?>
<?php get_header("pages"); ?>

<main class="main service service-top js-headerMain js-target-area">

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
				<p class="text-center">看板業者さんによっては、“ロードサイン専門”、もしくは“看板製作専門”と、<br>どちらかの専門となっている業者さんも多いかと思われます。<br>弊社はそのどちらにも精通した専門のエキスパートが在籍しております。<br>ロードサインだけでも、店舗の看板だけでも、もしくはその両方でも常磐広告に<br>安心してお任せ下さい。</p>	
			</div>
		</div>	
	</section>

	<section class="section">
		<div class="serviceBox">
			<div class="container">
				<h2 class="title-border">取り扱いサービス一覧</h2>
				<ul class="serviceBoxList">
					<?php foreach($service as $key) : ?>
						<li>
							<div class="serviceBoxListItem">
								<dl>
									<dt><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/top/<?php echo $key['img']; ?>.jpg" alt="<?php echo $key['title']; ?>"></dt>
									<dd>
										<h2><?php echo $key['title']; ?></h2>
										<p><?php echo $key['text']; ?></p>
									</dd>
								</dl>
								<div class="button-more">
									<a href="<?php echo esc_url( home_url( $key['link'] )); ?>"><span>Read more</span></a>
								</div>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</section>
	
</main>

<?php get_footer(); ?>