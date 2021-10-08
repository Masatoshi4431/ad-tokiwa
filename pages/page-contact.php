<?php  /* Template Name: お問い合わせ */ ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
			<p class="section-text">下記の内容をご入力の上、「送信する」ボタンをクリックしてください。<br>内容を確認次第、担当よりご連絡させていただきます。</p>
			<div class="contactForm">
				<?php the_content(); ?>
			</div>
			<p class="contactSend_notes">※ご入力内容にミスがある場合、「入力内容に問題があります。確認して再度お試しください。」の注意書きが表示されますので、再度ご入力をお願いいたします。<br>※正しく送信された場合、「メッセージは送信されました。」が表示されます。</p>
		</div>
	</section>

</main>

<?php wp_footer();?>
<?php get_footer(); ?>