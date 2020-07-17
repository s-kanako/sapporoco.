<?php
    function add_my_files() {	
        //スタイルシートの読み込み
        wp_enqueue_style('my-style', get_theme_file_uri('/assets/css/style.css'), array(), filemtime( get_theme_file_path( '/assets/css/style.css' ) ));
        //JavaScript の読み込み
        wp_enqueue_script('my-script', get_theme_file_uri('/assets/js/script.js'), array( 'jquery'),filemtime( get_theme_file_path( '/assets/js/script.js' ) ));
    }
    //アクションフック（wp_enqueue_scripts）への登録
    add_action('wp_enqueue_scripts', 'add_my_files');
?>
<?php // title自動出力
    add_theme_support( 'title-tag' );
?>

<?php
//固定ページの画像呼び出しパス
function imagepassshort($arg) {
    $content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
    return $content;
    }
    add_action('the_content', 'imagepassshort');
?>

<?php
// アイキャッチ画像を有効化
add_theme_support('post-thumbnails'); 
?>


<?php
// 記事IDを指定して抜粋文を取得
function ltl_get_the_excerpt($post_id){
    global $post;
    $post_bu = $post;
    $post = get_post($post_id);
    setup_postdata($post_id);
    $output = get_the_excerpt();
    $post = $post_bu;
    return $output;
    }
    //ブログカード
    function nlink_scode($atts) {
    extract(shortcode_atts(array(
    'url'=>"",
    'title'=>"",
    'excerpt'=>""
    ),$atts));
    
    $id = url_to_postid($url);//URLから投稿IDを取得
    
    
    //タイトルを取得
    if(empty($title)){
    $title = esc_html(get_the_title($id));
    }
    //抜粋文を取得
    if(empty($excerpt)){
    $excerpt = esc_html(ltl_get_the_excerpt($id));
    }
    
    //アイキャッチ画像を取得
    if(has_post_thumbnail($id)) {
    $img = wp_get_attachment_image_src(get_post_thumbnail_id($id),'medium');
    $img_tag = "<img src='" . $img[0] . "' alt='{$title}'/>";
    }else{
    $img_tag ='<img src="'.$no_image.'" alt="" width="'.$img_width.'" height="'.$img_height.'" />';
    }
    
    $nlink .='
    <div class="blog-card">
    <a href="'. $url .'">
    <div class="blog-card-thumbnail">'. $img_tag .'</div>
    <div class="blog-card-content">
    <div class="blog-card-title">'. $title .' </div>
    <div class="blog-card-excerpt">'. $excerpt .'</div>
    </div>
    <div class="clear"></div>
    </a>
    </div>';
    
    return $nlink;
    }
    
    add_shortcode("nlink", "nlink_scode");
?>


<?php
    //概要（抜粋）の文字数調整
    function my_excerpt_length($length) {
    return 40;
    }
    add_filter('excerpt_length', 'my_excerpt_length');
?>

<?php
    function my_excerpt_more($more) {
    return '…';
    }
    add_filter('excerpt_more', 'my_excerpt_more');
?>


<?php
    function pagination( $pages, $paged, $range = 2 ) {

        $pages = ( int ) $pages;
        $paged = $paged ?: 1;
    
        $text_before  = "‹";
        $text_next    = "›";
    
        if ( 1 !== $pages ) {
        //２ページ以上の時
        echo '<div class="Pagination">';
        if ( $paged > 1 ) {
            // 「‹」１ページ前へ戻るリンクを表示
            echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="Pagination-Item">', $text_before ,'</a>';
        }
        for ( $i = 1; $i <= $pages; $i++ ) {
    
            if ( $i <= $paged + $range && $i >= $paged - $range ) {
            if ( $paged === $i ) {
                echo '<span class="Pagination-Item isActive">', $i ,'</span>'; // 現在のページの数字
            } else {
                echo '<a href="', get_pagenum_link( $i ) ,'" class="Pagination-Item">', $i ,'</a>';
            }
            }
    
        }
        if ( $paged < $pages ) {
            // 「›」１ページ後へ進むリンクを表示
            echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="Pagination-Item">' ,$text_next ,'</a>';
        }
        echo '</div>';
        }
    }

?>