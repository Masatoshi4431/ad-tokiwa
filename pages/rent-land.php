<?php  
	/* Template Name: 土地活用 */ 
	include_once( STYLESHEETPATH . '/assets/data/service.php');
?>
<?php get_header("pages"); ?>

<main class="main rentLand js-headerMain">

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
				<p class="text-center">デッドスペース等の有効活用で不労所得を増やしませんか？<br>所有している土地が小さい、あるいはいびつでどう活用していいかわからない<br class="is-pc">土地は広いけど建物建ててテナントとして貸すのも初期費用が高い<br class="is-pc">不動産を持て余しておりませんか？<br>設置やメンテナンス、退去時の撤去まで一貫して弊社が責任を持って遂行いたします。<br>費用も管理するご面倒もございません。<br>地主様には毎年、看板設置使用料を一括前払いにてお支払いいたします。</p>			
			</div>
		</div>	
	</section>

	<section class="section">
		<div class="thumbnail">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rent-land/thumbnail.jpg" alt="">
		</div>
	</section>

	<section class="section">
		<div class="section_inner">
			<h2 class="section-point">土地活用のポイント</h2>
			<div class="pointList">
				<?php foreach($rent_land_point as $display) : ?>
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
			<h2 class="section-point is-en">Process</h2>
			<h3 class="section-lead is-en">設置までの流れ</h3>
			<div class="rentLandStep">
				<?php foreach($rent_land_process as $display) : ?>
					<div class="rentLandStepBox is-next">
						<p class="rentLandStepBox_number"><?php echo $display['num']; ?></p>
						<dl>
							<dt><?php echo $display['title']; ?></dt>
							<dd><img src="<?php echo get_template_directory_uri(); ?>/assets/images/rent-land/<?php echo $display['img']; ?>.png" alt="<?php echo $display['title']; ?>"></dd>
						</dl>
						<p class="rentLandStepBox_text"><?php echo $display['text']; ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="section_inner">
			<h2 class="section-point is-en">Removal</h2>
			<h3 class="section-lead is-en">看板撤去について</h3>
			<ul class="rentLandRemoval">
				<?php foreach($rent_land_removal as $display) : ?>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rent-land/<?php echo $display['img']; ?>.jpg" alt="<?php echo $display['title']; ?>">
					</li>
				<?php endforeach; ?>
			</ul>
			<p class="rentLandRemoval_text">ご契約終了後は速やかに撤去・原状復帰をさせていただきます。<br>弊社では、看板を取り外す事はもちろん、基礎部分の撤去、埋戻しまでを行います。<br>撤去作業、撤去後の各種申請関係の費用については発生致しませんので契約終了後でもご安心です。</p>
			<p class="rentLandRemoval_notes">※看板設置当時の状況と周辺の状況が大きく変わった場合には撤去方法についてご相談させていただく場合がございます。</p>
		</div>
	</section>

</main>

<?php get_footer(); ?>