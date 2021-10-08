<?php
     $page = get_post( get_the_ID() );
     $slug = $page->post_name;
?>

<?php
	// よくある質問の文言
	if(is_page('other-service')) {
		$faq_text = "その他のサービス";
	} elseif(is_page('production')) {
		$faq_text = "看板製作";
	} elseif(is_page('road-sign')) {
		$faq_text = "ロードサイン";
	} else {
		$faq_text = "";
	}
?>

<section class="commonFoot">
	<div class="commonFootBox">
		<div class="commonFootBoxItem">
			<dl>
				<dt><i class="far fa-envelope"></i></dt>
				<dd>
					<p class="commonFootBoxItem_title">Contact</p>
					<div class="commonFootBoxItem_text">
						<p>お問い合わせ</p>
					</div>
				</dd>
			</dl>
			<div class="button-more">
				<a href="/ad-tokiwa/contact/"><span>Read more</span></a>
			</div>
		</div>
	</div>
	<div class="commonFootBox is-faq">
		<div class="commonFootBoxItem">
			<dl>
				<dt><i class="fas fa-search"></i></dt>
				<dd>
					<p class="commonFootBoxItem_title">FAQ</p>
					<div class="commonFootBoxItem_text">
						<p><?php echo $faq_text; ?></p>
						<p>よくある質問</p>
					</div>
				</dd>
			</dl>
			<div class="button-more">
				<a href="/ad-tokiwa/faq/<?php echo "#". $slug; ?>"><span>Read more</span></a>
			</div>
		</div>
	</div>
</section>

<footer class="footer">
	<div class="footer_inner">
		<div class="footer_logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_white.png" alt="株式会社常磐広告">
			</a>
		</div>
		<div class="footerArea">
			<div class="footerAreaInfo">
				<p class="is-adress">〒312-0002 茨城県ひたちなか市高野450-1</p>
				<p>TEL.<span>029-212-5512</span></p>
				<p>FAX.<span>029-212-5513</span></p>
			</div>
			<div class="footerAreaSocial">
				<ul>				
					<li>
						<a href="https://www.facebook.com/tokiwa1976/" target="_blank">
							<i class="fab fa-facebook-square icon-size"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/tokiwa_1976/" target="_blank">
							<i class="fab fa-instagram icon-size"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="footerCopyright">
			<p>Copyright &copy; 株式会社常盤広告</p>
		</div>
	</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js?<?php echo time(); ?>"></script>
</body>
</html>