<?php  
	/* Template Name: ロードサイン */ 
	include_once( STYLESHEETPATH . '/assets/data/service.php');
?>
<?php get_header("pages"); ?>

<main class="main service road-sign js-headerMain js-target-area">

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
				<p class="text-center">常磐広告の強みは、自社ワンストップサービスにて、ロードサインを設置する場所の交渉から、デザイン〜製作〜施工までを行える事です。<br>各部門に専属のスタッフが在籍し、自社で全ての業務を行える為、コストも設置までの期間も大幅に短縮することが出来ます。<br>設置後も安心のアフターサービスで、見回り点検、自然災害対策や破損もフォローいたします。</p>
			</div>
		</div>	
	</section>

	<section class="section">
		<div class="thumbnail">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/road-sign/thumbnail.jpg" alt="">
		</div>
	</section>

	<section class="section">
		<div class="serviceWorries">
			<h2 class="serviceWorries_title">こんなお悩みありませんか？</h2>
			<div class="serviceWorries_img">
				<span class="is-pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/road-sign/worries_img_pc.png" alt=""></span>
				<span class="is-sp"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/road-sign/worries_img_sp.png" alt=""></span>
			</div>
			<div class="serviceWorriesBox">
				<h3 class="serviceWorriesBox_title">常磐広告にお任せください！</h3>
				<?php foreach($roadSign_worries as $display) : ?>
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
			<h3  class="section-lead">看板設置までの流れ</h3>
			<div class="serviceFollow">
				<?php foreach($roadSign_process as $display) : ?>
		
					<?php if(0 == strcmp($display['num'], '01')) : ?>
						<div class="serviceFollowBox is-or-text is-balloon">
							<p class="serviceFollowBox_number"><?php echo $display['num']; ?></p>
							<dl>
								<dt><?php echo $display['title']; ?></dt>
								<dd><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/road-sign/<?php echo $display['img']; ?>.png" alt="<?php echo $display['title']; ?>"></dd>
							</dl>
							<p class="serviceFollowBox_text"><?php echo $display['text']; ?></p>
						</div>
					<?php endif; ?>

					<?php if(0 == strcmp($display['num'], '02')) : ?>
						<div class="serviceFollowBox is-or  is-balloon">
							<p class="serviceFollowBox_number"><?php echo $display['num']; ?></p>
							<dl>
								<dt><?php echo $display['title']; ?></dt>
								<dd><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/road-sign/<?php echo $display['img']; ?>.png" alt="<?php echo $display['title']; ?>"></dd>
							</dl>
							<p class="serviceFollowBox_text"><?php echo $display['text']; ?></p>
						</div>
					<?php endif; ?>

 	   				<?php if(0 < strcmp($display['num'], '02')) : ?>
						<div class="serviceFollowBox is-next-top  is-balloon">
							<p class="serviceFollowBox_number"><?php echo $display['num']; ?></p>
							<dl>
								<dt><?php echo $display['title']; ?></dt>
								<dd><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/road-sign/<?php echo $display['img']; ?>.png" alt="<?php echo $display['title']; ?>"></dd>
							</dl>
							<p class="serviceFollowBox_text"><?php echo $display['text']; ?></p>
						</div>
					<?php endif; ?>

				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="section_inner">
			<h2 class="section-title">Line up</h2>
			<h3  class="section-lead">ロードサイン製品一覧</h3>
			<ul class="serviceLineup">
				<?php foreach($roadSign_lineup as $key) : ?>
					<li class="serviceLineupBox">
						<dl>
							<dt><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/road-sign/<?php echo $key['img']; ?>.jpg" alt="<?php echo $key['title']; ?>"></dt>
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
			<h2 class="section-titleWorks">Works<span class="section-leadWorks">製作実績</span></h2>		
			<ul class="servicePost">
				<?php 
					$works_post = get_posts(
						array(
							'category_name' => 'road-sign',
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
		</div>
	</section>

</main>

<?php get_footer(); ?>