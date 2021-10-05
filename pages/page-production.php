<?php  
	/* Template Name: 看板製作 */ 
	include_once( STYLESHEETPATH . '/assets/data/service.php');
?>
<?php get_header("pages"); ?>

<main class="main service production js-headerMain">

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
				<p class="text-center">常磐広告の強みは、ロードサインを設置する場所の交渉力と多方向から誘客する為の提案力です。<br>お客様からのリクエストを元に交渉をし、ロードサイン を設置する事ももちろん、<br>希少な場所や交通量が多い主要道路には積極的に新規設置をしております。</p>
			</div>
		</div>	
	</section>

	<section class="section">
		<div class="thumbnail">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/production/thumbnail.jpg" alt="">
		</div>
	</section>

	<section class="section">
		<div class="serviceWorries">
			<h2 class="serviceWorries_title">こんなお悩みありませんか？</h2>
			<div class="serviceWorries_img">
				<span class="is-pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/production/worries_img_pc.png" alt=""></span>
				<span class="is-sp"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/production/worries_img_sp.png" alt=""></span>
			</div>
			<div class="serviceWorriesBox">
				<h3 class="serviceWorriesBox_title">常磐広告にお任せください！</h3>
				<?php foreach($production_worries as $display) : ?>
					<dl>
						<dt><?php echo $display['title']; ?></dt>
						<dd><?php echo $display['text']; ?></dd>
					</dl>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="section_inner">
			<h2 class="section-title">Process</h2>
			<h3  class="section-lead">一般看板製作までの流れ</h3>
			<div class="serviceFollow">
				<?php foreach($production_process as $display) : ?>
					<div class="serviceFollowBox is-next">
						<p class="serviceFollowBox_number"><?php echo $display['num']; ?></p>
						<dl>
							<dt><?php echo $display['title']; ?></dt>
							<dd><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/production/<?php echo $display['img']; ?>.png" alt="<?php echo $display['title']; ?>"></dd>
						</dl>
						<p class="serviceFollowBox_text"><?php echo $display['text']; ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="section_inner">
			<h2 class="section-title">Line up</h2>
			<h3  class="section-lead">一般看板製品一覧</h3>
			<ul class="serviceLineup">
				<?php foreach($production_lineup as $key) : ?>
					<li class="serviceLineupBox">
						<dl>
							<dt><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/production/<?php echo $key['img']; ?>.jpg" alt="<?php echo $key['title']; ?>"></dt>
							<dd>
								<h4><?php echo $key['title']; ?></h4>
								<p><?php echo $key['text']; ?></p>
							</dd>
						</dl>
					</li>
				<?php endforeach; ?>								
			</ul>				
		</div>
	</section>

	<section class="section">
		<div class="section_inner">
			<h2 class="section-title">Works</h2>
			<h3  class="section-lead">製作実績</h3>		
			<ul class="servicePost">
				<?php 
					$works_post = get_posts(
						array(
							'category_name' => 'production',
							'posts_per_page' => 3,
						)
					); 
				?>
				<?php foreach ($works_post as $post) : setup_postdata($post); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<dl>
								<dt><?php the_post_thumbnail(''); ?></dt>
								<dd>
									<?php /*
									<p><?php the_time('Y.m.d'); ?></p>
									<h2><?php the_title(); ?></h2>
									*/ ?>
								</dd>
							</dl>
						</a>
					</li>								
				<?php endforeach; wp_reset_postdata(); ?>
			</ul>
			<div class="servicePostMore">
				<div class="button-more">
					<a href="/ad-tokiwa/works/production/"><span>Read more</span></a>
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>