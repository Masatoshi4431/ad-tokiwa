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
	
	<section class="section">
		<div class="section_inner">
			<h2 class="title-border">免責事項</h2>
			<p>当ホームページに情報を掲載する際には、情報の正確さについては万全を期しておりますが、技術的・法的に不完全な記述や誤植が含まれる場合があります。当方は利用者が当ホームページの情報を用いて行う一切の行為について、何ら責任を負うものではありません。<br>当ホームページの保守、火災・停電その他の自然災害及びウイルスや第三者の妨害等行為などの不可抗力によって、当ホームページによるサービスが停止したことに起因して利用者に生じた損害につき、当方は責任を負いかねますのでご了承ください。<br>ブラウザソフトや各種ツールなどのダウンロード及びインストールは、利用者の責任に基づいて行ってください。ダウンロード及びインストールに際して発生する障害やトラブルについて、当方は損害賠償や問題解決の責任を一切負いません。</p>
		</div>	
	</section>
	
	<section class="section">
		<div class="section_inner">
			<h2 class="title-border">リンクについて</h2>
			<p>当ホームページへのリンクは原則として自由ですので、リンクする場合のご連絡は不要です。ただし、悪用の意図があきらかな場合やリンク元の内容が法令や公序良俗に反する場合などの場合には、リンクの削除をお願いすることがありますので、あらかじめご了承ください。<br>当ホームページをフレーム内に表示することは誤解を招く恐れがあるためご遠慮ください。</p>
		</div>	
	</section>
	
	<section class="section">
		<div class="section_inner">
			<h2 class="title-border">その他</h2>
			<p>当ホームページは予告なしに内容を変更又は削除する場合があります。あらかじめご了承ください。</p>
		</div>	
	</section>

</main>

<?php get_footer(); ?>