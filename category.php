<?php get_header("pages"); ?>
<?php
    $category = get_the_category();
    $cat_slug = $category[0]->category_nicename;
	$cat      = $category[0];
	$catname  = get_cat_name($cat->term_id);
	$catid    = get_cat_ID($catname);
?>

<main class="main works js-headerMain">

	<section class="pageVisual">
		<div class="pageVisualBox">
			<div class="pageVisualBoxHead">
				<h1>Works</h1>
				<h2><?php single_cat_title() ?></h2>
			</div>
		</div>
		<div class="pageVisualThumb">
			<img src="http://conrize-demo.net<?php echo $masterLink; ?>/wp-content/uploads/2021/10/img-1.jpg" alt="">
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="worksHead">
				<h2 class="worksHead_title"><?php single_cat_title() ?></h2>
			</div>
			<ul class="worksPost">
				<?php
				    $paged = get_query_var('paged', 1);
				    $args = array(
				        'paged' => $paged,
				        'post_type' => 'post',
				        'posts_per_page' => 12,
				        'cat' => $catid,
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
	</section>

</main>


<?php get_footer(); ?>