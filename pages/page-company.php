<?php  
	/* Template Name: 会社概要 */ 
	include_once( STYLESHEETPATH . '/assets/data/company.php');
?>
<?php get_header("pages"); ?>

<main class="main company js-headerMain js-target-area">

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
				<p class="text-center">常磐広告は創業40年を迎え、茨城県を中心とした関東一円で様々な分野・業種のお客様のニーズに応えて参りました。<br>創業当初より変わらぬ職人の手作業による看板製作、ロードサイン(野立て看板)を中心とした屋外広告業はもとより、<br>株式会社ジェイアール東日本企画代理店として交通広告事業を展開。<br>また、次世代のデジタルサイネージの取扱いを開始し、<br>今後も総合広告業として・モノづくりの企業として、お客様のサインの、その先の未来を創造する企業を目指します。</p>		
			</div>
		</div>	
	</section>

	<section class="section">
		<div class="section_inner">
			<h2 class="section-title">Company Information</h2>
			<h3 class="section-lead">会社情報</h3>
			<?php foreach($overview as $display) : ?>
				<dl class="companyList">
					<dt><?php echo $display['title']; ?></dt>
					<dd><?php echo $display['text']; ?></dd>
				</dl>
			<?php endforeach; ?>
		</div>
	</section>	

	<section class="section">
		<div class="section_inner">
			<h2 class="section-title">Company history</h2>
			<h3 class="section-lead">会社沿革</h3>
			<?php foreach($history as $display) : ?>
				<dl class="companyList">
					<dt><?php echo $display['title']; ?></dt>
					<dd><?php echo $display['text']; ?></dd>
				</dl>
			<?php endforeach; ?>
		</div>	
	</section>

	<section class="section">
		<div class="section_inner">
			<h2 class="section-title">Access</h2>
			<h3 class="section-lead">交通アクセス</h3>
			<?php foreach($access as $display) : ?>
				<dl class="companyList">
					<dt><?php echo $display['title']; ?></dt>
					<dd><?php echo $display['text']; ?></dd>
				</dl>
			<?php endforeach; ?>
			<div class="companyMap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3210.2894577551137!2d140.54747171562605!3d36.42638289635144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60222f3db255f711%3A0x131d85c02f180a22!2z5qCq5byP5Lya56S-5bi456OQ5bqD5ZGK!5e0!3m2!1sja!2sjp!4v1632490702670!5m2!1sja!2sjp" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>	
		</div>	
	</section>

</main>

<?php get_footer(); ?>