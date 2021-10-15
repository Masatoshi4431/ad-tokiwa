<?php  
	/* Template Name: サイトポリシー */ 
?>
<?php get_header("pages"); ?>

<main class="main sitePolicy js-headerMain js-target-area">

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
			<h2 class="title-border">著作権について</h2>
			<p>当ホームページに掲載されている個々の情報（文字、写真、イラスト等）は著作権の対象となっております。また、当ホームページ全体も編集著作物として著作権の対象となっており、ともに各国の著作権法及び国際条約により保護されております。<br>当ホームページの内容の全部又は一部については、私的使用又は引用等著作権法上認められた行為として、適宜の方法により出所を明示することにより、引用、転載複製を行うことができます。ただし、「無断転載を禁じます」等の注記がある場合にはこの限りではありません。<br>当ホームページの内容の全部又は一部について、無断で改変を行うことはできません。</p>
		</div>	
	</section>





</main>

<?php get_footer(); ?>