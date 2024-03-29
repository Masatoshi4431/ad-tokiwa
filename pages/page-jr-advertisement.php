<?php  
	/* Template Name: JR広告（交通広告） */ 
	include_once( STYLESHEETPATH . '/assets/data/service.php');
?>
<?php get_header("pages"); ?>

<main class="main service jrAd js-headerMain js-target-area">

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
				<p class="text-center">駅構内の広告スペースは場所も種類も豊富です。駅利用者にターゲットを絞った効果的な広告で抜群の訴求力を発揮します。<br>弊社は「株式会社ジェイアール東日本企画代理店」及び「ＪＲ日立駅自由通路専任広告代理店」ですので駅通路や駅構内での広告掲載を<br>お考えのお客様はぜひ弊社の広告事業部までお問い合わせください。</p>	
			</div>
		</div>	
	</section>

	<section class="section">
		<div class="thumbnail">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/jr-advertisement/thumbnail.jpg" alt="">
		</div>
	</section>

	<section class="section">
		<div class="section_inner">
			<dl class="serviceCard">
				<dt>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/jr-advertisement/jr_img.jpg" alt="JR日立駅">
				</dt>
				<dd>
					<h2 class="title-border">JR日立駅 自由通路</h2>
					<p>JR日立駅の自由通路に設置されている広告です。弊社は「JR日立駅自由通路専任広告代理店」として、管理する広告媒体が11枠あります。日立駅の平均利用者は10,789人(2019年度)と、毎日1万人を越える方が自由通路を往来しますので、日立駅周辺での広告効果は抜群です。</p>
				</dd>
			</dl>
		</div>
	</section>

	<section class="section">
		<div class="section_inner">
			<h2 class="section-title">JR東日本企画代理店</h2>
			<h3  class="section-lead">取付イメージ</h3>
			<ul class="serviceLineup">
				<?php foreach($jrAd_production as $key) : ?>
					<li class="serviceLineupBox">
						<dl>
							<dt><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/jr-advertisement/<?php echo $key['img']; ?>.jpg" alt="<?php echo $key['title']; ?>"></dt>
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

</main>

<?php get_footer(); ?>