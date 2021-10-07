<?php
add_editor_style('admin.css');

/* ============================================================

	News

============================================================ */

    add_action('init', 'register_post_type_and_taxonomy'); // // 最初にregister_post_type_and_taxonomy関数を実行
   
    function register_post_type_and_taxonomy() {
        register_post_type( // カスタム投稿タイプを定義するための関数
            'news', // カスタム投稿タイプ名
            array(
                'labels' => array(
                'name' => 'ニュース', //ダッシュボードに表示される名前
                'add_new_item' => 'ニュースを新規追加', // 新規追加画面に表示される名前
                'edit_item' => 'ニュースの編集', // 編集画面に表示される名前
            ),
                'public' => true, // ダッシュボードに表示するか否か
                'hierarchical' => true, // 階層型にするか否か
                'has_archive' => true, // アーカイブ（一覧表示機能）を持つか否か
                'supports' => array( // カスタム投稿ページに表示される項目
                'title', // タイトル　＊＊＊カスタムフィールドだけにしたい場合は消しちゃう＊＊＊
                'editor', // 本文　＊＊＊カスタムフィールドだけにしたい場合は消しちゃう＊＊＊
                'custom-fields', // カスタムフィールド
                'thumbnail', // アイキャッチ画像　＊＊＊カスタムフィールドだけにしたい場合は消しちゃう＊＊＊
            ),
            'menu_position' => 5, // ダッシュボードで投稿の下に表示
            'rewrite' => array('with_front' => false), // パーマリンクの編集（newsの前の階層URLを消して表示）
        )
    );

    /* カテゴリタクソノミー(カテゴリー分け)を使えるように設定する */
    register_taxonomy(
        'orijinal_themes_cat', /* タクソノミーの名前 */
        'orijinal_themes', /* 使用するカスタム投稿タイプ名 */
        array(
        'hierarchical' => true, /* trueだと親子関係が使用可能。falseで使用不可 */
        'update_count_callback' => '_update_post_term_count',
        'label' => 'オリジナルテーマ作成カテゴリー',
        'singular_label' => 'オリジナルテーマ作成カテゴリー',
        'public' => true,
        'show_ui' => true
    )
    );
    /* カスタムタクソノミー、タグを使えるようにする */
    register_taxonomy(
        'orijinal_themes_tag', /* タクソノミーの名前 */
        'orijinal_themes', /* 使用するカスタム投稿タイプ名 */
        array(
        'hierarchical' => false,
        'update_count_callback' => '_update_post_term_count',
        'label' => 'オリジナルテーマ作成タグ',
        'singular_label' => 'オリジナルテーマ作成タグ',
        'public' => true,
        'show_ui' => true
    )
    );

    }


/* ============================================================

	アイキャッチ画像

============================================================ */
    add_theme_support('post-thumbnails');


/* ============================================================

	投稿画面のカスタムフィールド　

============================================================ */
    function add_production_field() {
    	add_meta_box( 'production', '製作実績', 'insert_production_field', 'post', 'normal');
    }
    add_action('admin_menu', 'add_production_field');

    function insert_production_field() {
    	global $post;

        echo 'クライアント名<br><input type="text" name="production_client" value="'.get_post_meta($post->ID, 'production_client', true).'" size="50" /><br><br>';
    	echo '製作内容<br><input type="text" name="production_content" value="'.get_post_meta($post->ID, 'production_content', true).'" size="50" /><br><br>';
    	echo '住所<br><input type="text" name="production_address" value="'.get_post_meta($post->ID, 'production_address', true).'" size="50" /><br><br>';
    	echo '製作期間<br><input type="text" name="production_period" value="'.get_post_meta($post->ID, 'production_period', true).'" size="50" /><br><br>';
    	echo 'サイズ<br><input type="text" name="production_size" value="'.get_post_meta($post->ID, 'production_size', true).'" size="50" /><br><br>';
    	echo 'コメント<br><input type="text" name="production_comment" value="'.get_post_meta($post->ID, 'production_comment', true).'" style="resize: vertical; width:100%;"/><br><br>';
    }

    function save_production_field($post_id) {
    	if(!empty($_POST['production_client'])){ 
    		update_post_meta($post_id, 'production_client', $_POST['production_client'] ); 
    	} else {
    		delete_post_meta($post_id, 'production_client'); 
    	}
    	
    	if(!empty($_POST['production_content'])){
    		update_post_meta($post_id, 'production_content', $_POST['production_content'] );
    	} else {
    		delete_post_meta($post_id, 'production_content');
    	}

    	if(!empty($_POST['production_address'])){
    		update_post_meta($post_id, 'production_address', $_POST['production_address'] );
    	} else {
    		delete_post_meta($post_id, 'production_address');
    	}
    	
    	if(!empty($_POST['production_period'])){
    		update_post_meta($post_id, 'production_period', $_POST['production_period'] );
    	} else {
    		delete_post_meta($post_id, 'production_period');
    	}
    	
    	if(!empty($_POST['production_size'])){
    		update_post_meta($post_id, 'production_size', $_POST['production_size'] );
    	} else {
    		delete_post_meta($post_id, 'production_size');
    	}

    	if(!empty($_POST['production_comment'])){
    		update_post_meta($post_id, 'production_comment', $_POST['production_comment'] );
    	} else {
    		delete_post_meta($post_id, 'production_comment');
    	}	
    }
    add_action('save_post', 'save_production_field');


/* ============================================================

	投稿画面のカスタムフィールド　【固定ページ用】

============================================================ */
    function add_page_field() {
    	add_meta_box( 'pageMain', 'ページ情報', 'insert_page_field', 'page', 'normal');
    }
    add_action('admin_menu', 'add_page_field');

    function insert_page_field() {
    	global $post;

    	echo 'ページタイトル<br><input type="text" name="page_title" value="'.get_post_meta($post->ID, 'page_title', true).'" size="50" /><br><br>';
    	echo 'サブタイトル<br><input type="text" name="page_lead" value="'.get_post_meta($post->ID, 'page_lead', true).'" size="50" /><br><br>';
    }

    function save_page_field($post_id) {
    	if(!empty($_POST['page_title'])){ 
    		update_post_meta($post_id, 'page_title', $_POST['page_title'] ); 
    	} else {
    		delete_post_meta($post_id, 'page_title'); 
    	}
    	
    	if(!empty($_POST['page_lead'])){
    		update_post_meta($post_id, 'page_lead', $_POST['page_lead'] );
    	} else {
    		delete_post_meta($post_id, 'page_lead');
    	}
    }
    add_action('save_post', 'save_page_field');

/* ============================================================

	投稿画面のカスタムフィールド【写真追加用】

============================================================ */
    add_action('admin_menu', 'add_custom_field_to_post_photo');
    function add_custom_field_to_post_photo() {
        add_meta_box('photoMedia1', '写真追加１', 'photo_media1Function', 'post', 'normal');
        add_meta_box('photoMedia2', '写真追加２', 'photo_media2Function', 'post', 'normal');
    }

    function photo_media1Function() {
        $keyname = 'photoMedia1';
        $media = 'media1';
        $media_clear = 'media-clear1';
        global $post;

        $get_value = get_post_meta($post->ID, $keyname, true);
        wp_nonce_field('action-' . $keyname, 'nonce-' . $keyname);
        echo '<div id="' . $media . '">
        <img src="' . $get_value . '" alt="" style="width:150px;height:150px;object-fit:cover;">
        </div>
        <input style="width:0;height:0;padding:0;margin:0;visibility:hidden" name="' . $keyname . '" type="text" value="' . $get_value . '"/>
        <input style="font-size:.9rem;background:#fff;cursor:pointer;padding:6px 12px;border-radius:2px;color:#007cba;border:1px solid #007cba;display:inline-block;" type="button" name="' . $media . '" value="画像選択" />
        <input style="font-size:.9rem;background:#fff;cursor:pointer;padding:6px 12px;border-radius:2px;color:#007cba;border:1px solid #007cba;display:inline-block;" type="button" name="' . $media_clear . '" value="削除" />';

    ?>

    <script>
        (function($) {
            var custom_uploader;

            $("input:button[name=<?= $media; ?>]").click(function(e) {
                e.preventDefault();
                if(custom_uploader) {
                custom_uploader.open();
                return;
            }

            custom_uploader = wp.media({
                title: "画像を選択",
                button: {
                    text: "画像を設定"
                },
                library: {
                    type: "image"
                },
                multiple: false
            });

            custom_uploader.on("select", function() {
                var images = custom_uploader.state().get("selection");
                images.each(function(file){
                    $("input:text[name=<?= $keyname; ?>]").val("");
                    $("#<?= $media; ?>").empty();
                    $("input:text[name=<?= $keyname; ?>]").val(file.attributes.url);
                    $("#<?= $media; ?>").append('<img src="'+file.attributes.url+'" / style="width:150px;height:150px;object-fit:cover;">');
                });
            });

            custom_uploader.open();
        });

        $("input:button[name=<?= $media_clear; ?>]").click(function() {
            $("input:text[name=<?= $keyname; ?>]").val("");
            $("#<?= $media; ?>").empty();
        });
        })(jQuery);
    </script>

    <?php
    }

    function photo_media2Function() {
        $keyname = 'photoMedia2';
        $media = 'media2';
        $media_clear = 'media-clear2';
        global $post;

        $get_value = get_post_meta($post->ID, $keyname, true);

        wp_nonce_field('action-' . $keyname, 'nonce-' . $keyname);
        echo '<div id="' . $media . '">
        <img src="' . $get_value . '" alt="" style="width:150px;height:150px;object-fit:cover;">
        </div>
        <input style="width:0;height:0;padding:0;margin:0;visibility:hidden" name="' . $keyname . '" type="text" value="' . $get_value . '"/>
        <input style="font-size:.9rem;background:#fff;cursor:pointer;padding:6px 12px;border-radius:2px;color:#007cba;border:1px solid #007cba;display:inline-block;" type="button" name="' . $media . '" value="画像選択" />
        <input style="font-size:.9rem;background:#fff;cursor:pointer;padding:6px 12px;border-radius:2px;color:#007cba;border:1px solid #007cba;display:inline-block;" type="button" name="' . $media_clear . '" value="削除" />';
    ?>

    <script>
        (function($) {
            var custom_uploader;

            $("input:button[name=<?= $media; ?>]").click(function(e) {
                e.preventDefault();
                if (custom_uploader) {
                    custom_uploader.open();
                    return;
                }

                custom_uploader = wp.media({
                    title: "画像を選択",
                    button: {
                        text: "画像を設定"
                    },
                    library: {
                        type: "image"
                    },
                    multiple: false
                });

                custom_uploader.on("select", function() {
                    var images = custom_uploader.state().get("selection");
                    
                    images.each(function(file){
                        $("input:text[name=<?= $keyname; ?>]").val("");
                        $("#<?= $media; ?>").empty();
                        $("input:text[name=<?= $keyname; ?>]").val(file.attributes.url);
                        $("#<?= $media; ?>").append('<img src="'+file.attributes.url+'" / style="width:150px;height:150px;object-fit:cover;">');
                    });
                });

                custom_uploader.open();
            });

            $("input:button[name=<?= $media_clear; ?>]").click(function() {
                $("input:text[name=<?= $keyname; ?>]").val("");
                $("#<?= $media; ?>").empty();
            });
        })(jQuery);
    </script>

    <?php
    }

    function save_custom_field_to_post_photo($post_id) {
        $custom_fields = ['photoMedia1', 'photoMedia2'];

        foreach($custom_fields as $d) {
            if(isset($_POST['nonce-' . $d]) && $_POST['nonce-' . $d]) {
                if(check_admin_referer('action-' . $d, 'nonce-' . $d)) {
                    if(isset($_POST[$d]) && $_POST[$d]) {
                        update_post_meta($post_id, $d, $_POST[$d]);
                    }else {
                        delete_post_meta($post_id, $d, get_post_meta($post_id, $d, true));
                    }
                }
            }
        }
    }
    add_action('save_post', 'save_custom_field_to_post_photo');

/* ============================================================

   ページャーエラー対策

============================================================ */
    add_filter('redirect_canonical','my_disable_redirect_canonical');

    function my_disable_redirect_canonical( $redirect_url ) {

        if ( is_archive() ){
            $subject = $redirect_url;
            $pattern = '/\/page\//'; 
            preg_match($pattern, $subject, $matches);

            if ($matches){
                $redirect_url = false;
                return $redirect_url;
            }
        }

    }

/* ============================================================

   description keyword カスタムフィールド
 
============================================================ */

    add_action('admin_menu', 'add_custom_fields');
    add_action('save_post', 'save_custom_fields');
     

    function add_custom_fields() {
        add_meta_box( 'my_sectionid', 'メタ設定', 'my_custom_fields', 'post');
        add_meta_box( 'my_sectionid', 'メタ設定', 'my_custom_fields', 'page');
    }
 
    function my_custom_fields() {
        global $post;
        $keywords = get_post_meta($post->ID,'keywords',true);
        $description = get_post_meta($post->ID,'description',true);

        echo '<p>キーワード（半角カンマ区切り）<br>';
        echo '<input type="text" name="keywords" value="'.esc_html($keywords).'" size="60"></p>';

        echo '<p>ページの説明（description）160文字以内<br>';
        echo '<input type="text" style="width: 600px;height: 40px;" name="description" value="'.esc_html($description).'" maxlength="160"></p>';
    }
 
    function save_custom_fields( $post_id ) {
        if(!empty($_POST['keywords']))
        update_post_meta($post_id, 'keywords', $_POST['keywords'] );
        else delete_post_meta($post_id, 'keywords');

        if(!empty($_POST['description']))
        update_post_meta($post_id, 'description', $_POST['description'] );
        else delete_post_meta($post_id, 'description');
    }
 
    function page_description() {
         
        // カスタムフィールドの値を読み込む
        $custom = get_post_custom();
        if(!empty( $custom['keywords'][0])) {
          $keywords = $custom['keywords'][0];
        }
        if(!empty( $custom['description'][0])) {
          $description = $custom['description'][0];
        }
    ?>
    <?php if(is_home()): // トップページ ?>
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="">
        <meta name="description" content="">
    <?php elseif(is_single()): // 記事ページ ?>
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="<?php echo $keywords ?>">
        <meta name="description" content="<?php echo $description ?>">
    <?php elseif(is_page()): // 固定ページ ?>
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="<?php echo $keywords ?>">
        <meta name="description" content="<?php echo $description ?>">
    <?php elseif (is_category()): // カテゴリーページ ?>
        <meta name="robots" content="index, follow" />
        <meta name="description" content="<?php single_cat_title(); ?>の記事一覧">
    <?php elseif (is_tag()): // タグページ ?>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="<?php single_tag_title("", true); ?>の記事一覧">
    <?php elseif(is_404()): // 404ページ ?>
        <meta name="robots" content="noindex, follow">
        <title><?php echo 'お探しのページが見つかりませんでした'; ?></title>
    <?php else: // その他ページ ?>
        <meta name="robots" content="noindex, follow">
        <?php endif; ?>
    <?php
    }

?>