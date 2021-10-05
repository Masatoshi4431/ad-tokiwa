<?php  /* Template Name: News */ ?>
<?php get_header("pages"); ?>

<main class="main news js-headerMain">

	<div class="heading">
		<div class="container">
			<h1>News</h1>
			<h2>ニュース</h2>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<div class="newsPost">
				<?php
					$information = get_posts(
						array(
							'posts_per_page' => 10,
							'post_type'      => 'news'
						)
					);
				?>
				<?php foreach($information as $post) : setup_postdata($post); ?>
					<dl>
						<a href="<?php the_permalink(); ?>">
							<dt><?php the_time('Y.m.d'); ?></dt>
							<dd><?php the_title(); ?></dd>
						</a>
					</dl>
				<?php endforeach; wp_reset_postdata(); ?> 
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>