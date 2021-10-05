<?php  /* Template Name: 一般制作・製作実績一覧 */ ?>
<?php get_header("pages"); ?>

<?php
    $category = get_the_category();
    $cat_slug = $category[0]->category_nicename;
	$cat      = $category[0];
	$catname  = get_cat_name($cat->term_id);
	$catid    = get_cat_ID($catname);
?>

<main class="main works is-gray js-headerMain">

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
			<div class="postNav">
				<ul class="postNavList">
					<li class="js-tab-list is-select">ロードサイン</li>
					<li class="js-tab-list">一般製作</li>
					<li class="js-tab-list">その他</li>
				</ul>
			</div>
			<div class="js-tab-contet">
				<ul class="worksPost">
					<?php
					    $paged = get_query_var('paged', 1);
					    $args = array(
					        'paged' => $paged,
					        'post_type' => 'post',
					        'posts_per_page' => 12,
					        'category_name' => 'road-sign',
					    );
					    $query = new WP_Query($args);
					?>
					<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<dl class="worksPostBox">
									<dt><?php the_post_thumbnail(''); ?></dt>
									<dd>
										<p><?php the_time("Y.m.d"); ?></p>
										<h2><?php the_title(); ?></h2>
									</dd>
								</dl>
							</a>
						</li>
					<?php endwhile;endif; ?>
				</ul>
				<div class="worksPostNav">
					<?php wp_pagenavi(array('query' => $query)); ?>
				</div>
				<?php wp_reset_postdata(); ?>
			</div>
			<div class="js-tab-contet is-hide">
				<ul class="worksPost">
					<?php
					    $paged = get_query_var('paged', 1);
					    $args = array(
					        'paged' => $paged,
					        'post_type' => 'post',
					        'posts_per_page' => 12,
					        'category_name' => 'production',
					    );
					    $query = new WP_Query($args);
					?>
					<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<dl class="worksPostBox">
									<dt><?php the_post_thumbnail(''); ?></dt>
									<dd>
										<p><?php the_time("Y.m.d"); ?></p>
										<h2><?php the_title(); ?></h2>
									</dd>
								</dl>
							</a>
						</li>
					<?php endwhile;endif; ?>
				</ul>
				<div class="worksPostNav">
					<?php wp_pagenavi(array('query' => $query)); ?>
				</div>
				<?php wp_reset_postdata(); ?>
			</div>
			<div class="js-tab-contet is-hide">
				<ul class="worksPost">
					<?php
					    $paged = get_query_var('paged', 1);
					    $args = array(
					        'paged' => $paged,
					        'post_type' => 'post',
					        'posts_per_page' => 12,
					        'category_name' => 'etc',
					    );
					    $query = new WP_Query($args);
					?>
					<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<dl class="worksPostBox">
									<dt><?php the_post_thumbnail(''); ?></dt>
									<dd>
										<p><?php the_time("Y.m.d"); ?></p>
										<h2><?php the_title(); ?></h2>
									</dd>
								</dl>
							</a>
						</li>
					<?php endwhile;endif; ?>
				</ul>
				<div class="worksPostNav">
					<?php wp_pagenavi(array('query' => $query)); ?>
				</div>
				<?php wp_reset_postdata(); ?>
			</div>				
		</div>
	</section>

	<?php /*
	<section class="section">
		<div class="worksBox">
			<div class="worksBox_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/thumbnail_1.jpg" alt="">
			</div>
			<div class="worksBoxMain">
				<h2 class="worksBoxMain_title">ロードサイン</h2>
				<p class="worksBoxMain_text">ロードサイン（野立て看板）とは、道路沿線に設置される広告看板です。テレビやチラシ、雑誌といった広告ツールは瞬間的に大勢の人々に訴求することが出来ますが、多額な費用がかかるのと広告を継続しなければ効果は長続きしません。しかし、ロードサインは交通量がそのまま</p>
				<div class="worksBoxMainMore">
					<div class="button-more">
						<a href="/works/road-sign/"><span>Read more</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="worksBox is-second">
			<div class="worksBoxMain">
				<h2 class="worksBoxMain_title">一般製作</h2>
				<p class="worksBoxMain_text">企業・店舗の顔となり、印象が大きく左右される大事なアイテムとなってきます。貴社の雰囲気や個性にマッチしたテイスト、ご要望に応じた各種異素材・様々な用途の看板を製作いたします。</p>
				<div class="worksBoxMainMore">
					<div class="button-more">
						<a href="/works/production/"><span>Read more</span></a>
					</div>
				</div>
			</div>
			<div class="worksBox_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/thumbnail_2.jpg" alt="">
			</div>
		</div>
	</section>
	*/ ?>

</main>

<?php get_footer(); ?>