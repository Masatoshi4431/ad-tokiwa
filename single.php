<?php get_header("pages"); ?>
<?php 
	if (is_singular('news')) {
		get_template_part('news');
	}
?>
<main class="main single js-headerMain  js-target-area">

	<section class="section">
		<div class="container">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="singleHead">
					<div class="singleHead_inner">
						<div class="singleHeadDesc">
							<h1 class="singleHeadDesc_title"><?php the_title(); ?></h1>
							<p class="singleHeadDesc_client"><?php echo get_post_meta($post->ID, 'production_client', true); ?></p>
							<p class="singleHeadDesc_adress"><?php echo get_post_meta($post->ID, 'production_address', true); ?></p>
							<p class="singleHeadDesc_period">
								製作期間：<?php echo get_post_meta($post->ID, 'production_period', true); ?>
								<span class="-slash">サイズ：<?php echo get_post_meta($post->ID, 'production_size', true); ?></span>
							</p>
							<p class="singleHeadDesc_comment"><?php the_content(); ?></p>
						</div>
						<dl class="singleHeadThumb">
							<dt class="singleHeadThumb_main"><?php the_post_thumbnail(); ?></dt>
							<dd class="singleHeadThumb_sub">
								<div class="-left"><img src="<?php echo get_post_meta($post->ID, 'photoMedia1', true); ?>" alt=""></div>
								<div class="-right"><img src="<?php echo get_post_meta($post->ID, 'photoMedia2', true); ?>" alt=""></div>
							</dd>
						</dl>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</section>

</main>

<?php get_footer(); ?>