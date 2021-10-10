<?php get_header(); ?>

<main class="top">

	<section class="mainvisual">
		<div class="mainvisualMovie">
			<div class="mainvisualMovie_inner">
				<video webkit-playsinline playsinline muted autoplay loop>
					<source src="http://conrize-demo.net/ad-tokiwa/wp-content/uploads/2021/10/tokiwa-movie.mp4">
				</video>
			</div>
		</div>
		<div class="mainvisualHeadArea">
			<div class="mainvisualHead">
				<h1 class="mainvisualHead_title"><span>看板の、</span>その先へ。</h1>
				<h2 class="mainvisualHead_lead">Beyond the sign.</h2>
				<h3 class="mainvisualHead_text">私たちは、消費者の方と直接的な結びつきはありません。<br class="is-pc">しかし、私たちの仕事はお客様のお客様なしに成り立ちません。<br>お客様の思いを、看板のその先へ伝える。<br>これが常磐広告の使命です。</h3>
			</div>
		</div>
		<div class="mainvisualScroll">
			<span></span>
		</div>
	</section>

	<section class="section-about">
		<div class="aboutArea">
			<h3 class="aboutArea_title">About us</h3>
			<div class="aboutArea_button">
				<div class="button-more is-white">
					<a href="<?php echo esc_url( home_url( '/company/' )); ?>"><span>Read more</span></a>
				</div>
			</div>
		</div>
	</section>

	<section class="section-news js-target-area">
		<div class="container">
			<div class="section-news-title">
				<h2>News</h2>
				<h3>お知らせ</h3>
			</div>
			<div class="newsArea">
				<?php
					$news = get_posts (
						array(
							'post_type' => 'news',
							'posts_per_page' => 3,
						)
					);
				?>
				<ul>
					<?php foreach ($news as $post) : setup_postdata($post); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<dl>
									<dt><?php the_time('Y.m.d'); ?></dt>
									<dd><?php the_title(); ?></dd>
								</dl>
							</a>
						</li>
					<?php endforeach; wp_reset_postdata(); ?>
				</ul>
			</div>
			<div class="button-more">
				<a href="<?php echo esc_url( home_url( '/news/' )); ?>"><span>Read more</span></a>
			</div>
		</div>
	</section>

	<section class="top-service-head">
		<div class="container">
			<h2 class="title">Our Service</h2>
		</div>
	</section>

	<section class="top-service">
		<div class="container">
			<div class="serviceBox">
				<p class="serviceBox_number">01</p>
				<h2 class="serviceBox_title">Road Sign</h2>
				<h3 class="serviceBox_lead">ロードサイン</h3>
				<p class="serviceBox_text">記憶に刷込み、興味を引き認知度・商圏範囲を広げます。<br class="is-pc">『潜在顧客』から『お客様』に変わるきっかけとなります。</p>
				<div class="button-more">
					<a href="<?php echo esc_url( home_url( '/service/road-sign/' )); ?>"><span>Read more</span></a>
				</div>
			</div>
			<div class="serviceBox_img is-sp">
				<img src="http://conrize-demo.net/ad-tokiwa/wp-content/uploads/2021/10/service_bg_1-1.jpg" alt="">
			</div>
		</div>
	</section>

	<section class="top-service is-ad">
		<div class="container">
			<div class="serviceBox">
				<p class="serviceBox_number">02</p>
				<h2 class="serviceBox_title">Ad Recruit</h2>
				<h3 class="serviceBox_lead">空き看板情報</h3>
				<p class="serviceBox_text">交通量や人の流れが多い場所に随時追加設置しております。<br class="is-pc">空いて間もなく・新設したばかりの新着情報もお見逃しなく。</p>
				<div class="button-more">
					<a href="<?php echo esc_url( home_url( '/ad-recruit/' )); ?>"><span>Read more</span></a>
				</div>
			</div>
			<div class="serviceBox_img is-sp">
				<img src="http://conrize-demo.net/ad-tokiwa/wp-content/uploads/2021/10/service_bg_2.jpg" alt="">
			</div>
		</div>
	</section>

	<section class="top-service is-production">
		<div class="container">
			<div class="serviceBox">
				<p class="serviceBox_number">03</p>
				<h2 class="serviceBox_title">Production</h2>
				<h3 class="serviceBox_lead">看板製作</h3>
				<p class="serviceBox_text">お客様によって必要とする看板は多種多様です。<br>御社の顔・販促となる世界にひとつだけのオリジナル看板を製作します。</p>
				<div class="button-more">
					<a href="<?php echo esc_url( home_url( '/service/production/' )); ?>"><span>Read more</span></a>
				</div>
			</div>
			<div class="serviceBox_img is-sp">
				<img src="http://conrize-demo.net/ad-tokiwa/wp-content/uploads/2021/10/service_bg_3.jpg" alt="">
			</div>
		</div>
	</section>

	<section class="top-other">
		<div class="otherArea">
			<div class="otherAreaBox">
				<h2 class="otherAreaBox_number">04</h2>
				<h3 class="otherAreaBox_title">Other Service</h3>
				<h4 class="otherAreaBox_lead">その他のサービス</h4>
				<p class="otherAreaBox_text">看板に関わる様々なお困りごとに対応。メンテナンス・移設・撤去・申請代行・調査・交通広告・デジタルサイネージなど。</p>
				<div class="button-more">
					<a href="<?php echo esc_url( home_url( '/service/other-service/' )); ?>"><span>Read more</span></a>
				</div>
				<div class="thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/other-service.jpg" alt="その他サービス">
				</div>
			</div>
			<div class="otherAreaBox is-border-left">
				<h2 class="otherAreaBox_number">05</h2>
				<h3 class="otherAreaBox_title">Rent Land</h3>
				<h4 class="otherAreaBox_lead">土地活用</h4>
				<p class="otherAreaBox_text">土地・壁面・屋上・デッドスペースを有効活用。毎年使用料を一括前払い。契約終了の際には撤去まで責任持って対応。</p>
				<div class="button-more">
					<a href="<?php echo esc_url( home_url( '/rent-land/' )); ?>"><span>Read more</span></a>
				</div>
				<div class="thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/rent-land.jpg" alt="土地活用">
				</div>
			</div>
		</div>
	</section>

	<section class="top-works">
		<div class="container">
			<div class="heading">
				<h2 class="heading_title">Works</h2>
				<h3 class="heading_lead">制作実績</h3>
			</div>
		</div>
		<div class="thumbnail">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/works_img.jpg" alt="制作実績">
		</div>
		<div class="button-more">
			<a href="<?php echo esc_url( home_url( '/works/' )); ?>"><span>Read more</span></a>
		</div>
	</section>

</main>

<?php get_footer(); ?>