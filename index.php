<?php get_header(); ?>

<main class="top">

	<section class="mainvisual">
		<div class="mainvisualMovie">
			<div class="mainvisualMovie_inner">
				<video autoplay="" muted="" loop=""　playsinline autoplay muted loop>
					<source src="http://conrize-demo.net/ad-tokiwa/wp-content/uploads/2021/10/tokiwa-movie.mp4">
				</video>
			</div>
		</div>
		<div class="mainvisualHeadArea">
			<div class="mainvisualHead">
				<h1 class="mainvisualHead_title"><span>看板の、</span>その先へ。</h1>
				<h2 class="mainvisualHead_lead">Beyond the sign.</h2>
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
					<a href="/ad-tokiwa/company/"><span>Read more</span></a>
				</div>
			</div>
		</div>
	</section>

	<section class="section-news js-headerMain js-target-area">
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
				<a href="/ad-tokiwa/news/"><span>Read more</span></a>
			</div>
		</div>
	</section>
	
	<section class="serviceMainTitle">
		<div class="serviceMainTitleArea">
			<div class="container">
				<h2>Our Service</h2>
			</div>
		</div>
	</section>

	<section class="section-service">
		<div class="serviceArea">
			<div class="container">
				<div class="serviceAreaBox">
					<p class="serviceAreaBox_number">01</p>
					<h2 class="serviceAreaBox_title">Road Sign</h2>
					<h3 class="serviceAreaBox_lead">ロードサイン</h3>
					<p class="serviceAreaBox_text">記憶に刷込み、興味を引き認知度・商圏範囲を広げます。<br class="is-pc">『潜在顧客』から『お客様』に変わるきっかけとなります。</p>
					<div class="button-more">
						<a href="/ad-tokiwa/service/road-sign/"><span>Read more</span></a>
					</div>
				</div>
				<div class="serviceAreaThumb is-sp">
					<img src="http://conrize-demo.net/ad-tokiwa/wp-content/uploads/2021/10/service_bg_1-1.jpg" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="section-service is-ad">
		<div class="serviceArea">
			<div class="container">
				<div class="serviceAreaBox">
					<p class="serviceAreaBox_number">02</p>
					<h2 class="serviceAreaBox_title">Ad.Recruit</h2>
					<h3 class="serviceAreaBox_lead">広告募集</h3>
					<p class="serviceAreaBox_text">交通量や人の流れが多い場所に随時追加設置しております。<br class="is-pc">空いて間もなく・新設したばかりの新着情報もお見逃しなく。</p>
					<div class="button-more">
						<a href="/ad-tokiwa/ad-recruit/"><span>Read more</span></a>
					</div>
				</div>
				<div class="serviceAreaThumb is-sp">
					<img src="http://conrize-demo.net/ad-tokiwa/wp-content/uploads/2021/10/service_bg_2.jpg" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="section-service is-production">
		<div class="serviceArea">
			<div class="container">
				<div class="serviceAreaBox">
					<p class="serviceAreaBox_number">03</p>
					<h2 class="serviceAreaBox_title">Production</h2>
					<h3 class="serviceAreaBox_lead">看板製作</h3>
					<p class="serviceAreaBox_text">お客様によって必要とする看板は多種多様です。<br>御社の顔・販促となる世界にひとつだけのオリジナル看板を製作します。</p>
					<div class="button-more">
						<a href="/ad-tokiwa/service/production/"><span>Read more</span></a>
					</div>
				</div>
				<div class="serviceAreaThumb is-sp">
					<img src="http://conrize-demo.net/ad-tokiwa/wp-content/uploads/2021/10/service_bg_3.jpg" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="section-other">
		<div class="otherArea">
			<div class="otherBox">
				<p class="number">04</p>
				<h2>Other Service</h2>
				<h3>その他サービス</h3>
				<p class="text">看板に関わる様々なお困りごとに対応。メンテナンス・移設・撤去・申請代行・調査・交通広告・デジタルサイネージなど。</p>
				<div class="button-more">
					<a href="/ad-tokiwa/service/other-service/"><span>Read more</span></a>
				</div>
				<div class="thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/other-service.jpg" alt="その他サービス">
				</div>
			</div>
			<div class="otherBox is-rentLand">
				<p class="number">05</p>
				<h2>Rent Land</h2>
				<h3>土地活用</h3>
				<p class="text">土地・壁面・屋上・デッドスペースを有効活用。毎年使用料を一括前払い。契約終了の際には撤去まで責任持って対応。</p>
				<div class="button-more">
					<a href="/ad-tokiwa/rent-land/"><span>Read more</span></a>
				</div>
				<div class="thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/rent-land.jpg" alt="土地活用">
				</div>
			</div>
		</div>
	</section>

	<section class="section-work">
		<div class="heading">
			<div class="container">
				<h2>Works</h2>
				<h3>制作実績</h3>
			</div>
		</div>
		<div class="thumbnail">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/works_img.jpg" alt="制作実績">
		</div>
		<div class="button-more">
			<a href="/ad-tokiwa/works/"><span>Read more</span></a>
		</div>
	</section>

</main>

<?php get_footer(); ?>