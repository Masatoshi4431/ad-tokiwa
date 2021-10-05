<?php get_header("pages"); ?>

<main class="main notfound js-headerMain">

	<section class="notfoundHead">
		<div class="container">
			<h2 class="notfoundHead_title">404</h2>
			<h3 class="notfoundHead_lead">お探しのページが見当たりませんでした</h3>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="notfoundMain">
				<p>申し訳ございません。<br class="is-sp">お探しのページが見当たりませんでした。<br>下記のボタンからトップページにお戻りください。</p>
			</div>
			<div class="notfoundMore">
				<div class="button-more">
					<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホームに戻る</a></span>
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>