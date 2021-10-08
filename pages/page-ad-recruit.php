<?php  /* Template Name: 空き看板情報 */ ?>
<?php get_header("pages"); ?>

<main class="main contact js-headerMain js-target-area">

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

<iframe frameborder="0" scrolling="auto" src="https://viewer.kintoneapp.com/public/7518c24347991d7894da293558f73ea91ff3d4b537a47a076430efe6475a579a?iframe=true" title="空き看板情報" width="100%"></iframe>


</main>

<?php get_footer(); ?>