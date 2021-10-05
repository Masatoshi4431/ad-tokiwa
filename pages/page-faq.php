<?php  
	/* Template Name: よくある質問 */ 
	include_once( STYLESHEETPATH . '/assets/data/faq.php');
?>
<?php get_header("pages"); ?>

<main class="main faq js-headerMain">

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
		<div class="faqNav">
			<div class="container">
				<ul class="faqNavList js-anchor">
					<li><a href="#road-sign">ロードサイン</a></li>
					<li><a href="#production">看板製作</a></li>
					<li><a href="#other-service">その他のサービス</a></li>	
				</ul>
			</div>
		</div>
		<div class="faqBox">
			<div class="container">
				<div class="faqBoxList" id="road-sign">
					<h2 class="faqBoxList_title">ロードサイン</h2>
					<?php foreach($road_sign as $display) : ?>
						<dl class="faqBoxListItem">
							<dt class="js-accordion">
								<p class="faqBoxListItem_questionMark">Q</p>
								<p class="faqBoxListItem_title"><?php echo $display['question']; ?></p>
							</dt>
							<dd>
								<div class="faqBoxListItemAnswer">
									<p class="faqBoxListItem_answerMark">A</p>
									<p class="faqBoxListItem_text"><?php echo $display['answer']; ?></p>
								</div>
							</dd>
						</dl>
					<?php endforeach; ?>
				</div>
				<!--<div class="faqBoxList" id="jr-advertisement">
					<h2 class="faqBoxList_title">JR広告</h2>
					<?php /* foreach($jr as $display) : */ ?>
						<dl class="faqBoxListItem">
							<dt class="js-accordion">
								<p class="faqBoxListItem_questionMark">Q</p>
								<p class="faqBoxListItem_title"><?php /* echo $display['question']; */ ?></p>
							</dt>
							<dd>
								<div class="faqBoxListItemAnswer">
									<p class="faqBoxListItem_answerMark">A</p>
									<p class="faqBoxListItem_text"><?php /* echo $display['answer']; */ ?></p>
								</div>
							</dd>
						</dl>
					<?php /* endforeach; */ ?>
				</div>-->
				<div class="faqBoxList" id="production">
					<h2 class="faqBoxList_title">看板制作</h2>
					<?php foreach($signboard as $display) : ?>
						<dl class="faqBoxListItem">
							<dt class="js-accordion">
								<p class="faqBoxListItem_questionMark">Q</p>
								<p class="faqBoxListItem_title"><?php echo $display['question']; ?></p>
							</dt>
							<dd>
								<div class="faqBoxListItemAnswer">
									<p class="faqBoxListItem_answerMark">A</p>
									<p class="faqBoxListItem_text"><?php echo $display['answer']; ?></p>
								</div>
							</dd>
						</dl>
					<?php endforeach; ?>
				</div>
				<div class="faqBoxList" id="other-service">
					<h2 class="faqBoxList_title">その他のサービス</h2>
					<?php foreach($etc as $display) : ?>
						<dl class="faqBoxListItem">
							<dt class="js-accordion">
								<p class="faqBoxListItem_questionMark">Q</p>
								<p class="faqBoxListItem_title"><?php echo $display['question']; ?></p>
							</dt>
							<dd>
								<div class="faqBoxListItemAnswer">
									<p class="faqBoxListItem_answerMark">A</p>
									<p class="faqBoxListItem_text"><?php echo $display['answer']; ?></p>
								</div>
							</dd>
						</dl>
					<?php endforeach; ?>
				</div>
			</div>
		</div>				
	</section>

</main>

<?php get_footer(); ?>