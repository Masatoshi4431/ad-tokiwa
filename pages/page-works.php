<?php  /* Template Name: 一般制作・製作実績一覧 */ ?>
<?php get_header("pages"); ?>

<?php
    $category = get_the_category();
    $cat_slug = $category[0]->category_nicename;
	$cat      = $category[0];
	$catname  = get_cat_name($cat->term_id);
	$catid    = get_cat_ID($catname);
?>

<main class="main works is-gray js-headerMain js-target-area">

	<section class="pageVisual">
		<div class="pageVisualBox">
			<div class="pageVisualBoxHead">
				<h1><?php echo get_post_meta($post->ID, 'page_title', true); ?></h1>
				<h2><?php echo get_post_meta($post->ID, 'page_lead', true); ?></h2>
			</div>
		</div>
		<div class="pageVisualThumb">
			<img src="https://ad-tokiwa.jp/wp-content/uploads/2021/10/works-img.jpg" alt="">
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="postNav">
				<ul class="postNavList">
					<li><a href="<?php echo esc_url( home_url( '/works/road-sign/' )); ?>">ロードサイン</a></li>
					<li><a href="<?php echo esc_url( home_url( '/works/production/' )); ?>">一般製作</a></li>
					<li><a href="<?php echo esc_url( home_url( '/works/etc/' )); ?>">その他</a></li>
				</ul>
			</div>
			<div class="">
				<ul class="worksPost">
					<?php
					    $paged = get_query_var('paged', 1);
					    $args = array(
					        'paged' => $paged,
					        'post_type' => 'post',
					        'posts_per_page' => 12,
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

</main>

<?php get_footer(); ?>