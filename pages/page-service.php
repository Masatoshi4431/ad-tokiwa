<?php  
	/* Template Name: Service */ 
	include_once( STYLESHEETPATH . '/assets/data/service.php');
?>
<?php get_header("pages"); ?>

<main class="main service service-top js-headerMain">

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
				<p class="text-center">『看板』と言っても、様々な用途・特性・役割があります。<br>弊社は一貫して、サイン広告に関わる全てを自社製作にてご要望にお応えいたします。<br>看板業者さんによっては、“オーダー製作”、もしくは“リース看板”と、どちらかに専門となっている業者さんも多いかと思われます。<br>弊社はそのどちらもエキスパートとして、同じ担当が一貫してご提案させていただきます。</p>	
			</div>
		</div>	
	</section>

	<section class="section">
		<div class="serviceBox">
			<div class="container">
				<h2 class="title-border">取扱いサービス一覧</h2>
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
									<a href="/ad-tokiwa<?php echo $key['link']; ?>"><span>Read more</span></a>
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