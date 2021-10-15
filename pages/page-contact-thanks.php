<?php  /* Template Name: お問い合わせ 完了画面 */ ?>
<?php wp_head(); ?>
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

	<section class="section">
		<div class="container">
			
			<p class="section-text">ご入力いただきありがとうございました。<br>内容を確認の上、担当者からご連絡いたします。</p>
			<div class="contactForm">
				<?php the_content(); ?>
			</div>
		</div>
	</section>

</main>

<?php wp_footer();?>
<?php get_footer(); ?>