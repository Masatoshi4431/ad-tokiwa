<?php  /* Template Name: 空き看板情報 */ ?>
<?php get_header("pages"); ?>

<main class="main contact js-headerMain">

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

<iframe frameborder="0" scrolling="auto" src="https://viewer.kintoneapp.com/public/f00000e440a95e08461cb72246c8a47ea187ea8b1bf0647a18fa13ffc01118e7?iframe=true" title="テスト" width="100%" height="1024px"></iframe>


</main>

<?php get_footer(); ?>