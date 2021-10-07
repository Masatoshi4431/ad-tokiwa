<?php get_header("pages"); ?>

<main class="main singleNews js-headerMain">

	<section class="section">
		<div class="container">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="singleNewsHead">
					<h1 class="singleNewsHead_title"><?php the_title(); ?></h1>
					<p class="singleNewsHead_time"><?php the_time('Y.m.d'); ?></p>
				</div>
				<div class="singleNewsBody">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</section>

</main>

<?php get_footer(); ?>