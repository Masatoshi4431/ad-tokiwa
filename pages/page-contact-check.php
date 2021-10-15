<?php  /* Template Name: お問い合わせ 確認画面 */ ?>
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
			<p class="section-text">ご入力いただいた内容をご確認の上、「送信する」ボタンをクリックしてください。<br>ご入力内容を修正する場合は「戻る」ボタンをクリックしてください。</p>
			<div class="contactForm">
				<?php the_content(); ?>
			</div>
		</div>
	</section>

</main>

<?php wp_footer();?>
<?php get_footer(); ?>