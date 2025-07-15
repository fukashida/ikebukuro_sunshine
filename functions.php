<?php
//サイドバー削除
/////////////////////////////////////////////////////
function disable_admin_bar(){
  return false;
}
// add_filter( 'show_admin_bar' , 'disable_admin_bar');

//iframe使えるようにする
// フィルタの登録
/////////////////////////////////////////////////////
add_filter('content_save_pre','test_save_pre');

function test_save_pre($content){
    global $allowedposttags;

// iframeとiframeで使える属性を指定する
/////////////////////////////////////////////////////
$allowedposttags['iframe'] = array('class' => array () , 'src'=>array() , 'width'=>array(),
'height'=>array() , 'frameborder' => array() , 'scrolling'=>array(),'marginheight'=>array(),
'marginwidth'=>array());

return $content;
}

//CSS記載可能にする
/////////////////////////////////////////////////////
add_action('admin_menu', 'custom_css_hooks');
add_action('save_post', 'save_custom_css');
add_action('wp_head','insert_custom_css');
function custom_css_hooks() {
	add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'post', 'normal', 'high');
	add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'page', 'normal', 'high');
}
function custom_css_input() {
	global $post;
	echo '<input type="hidden" name="custom_css_noncename" id="custom_css_noncename" value="'.wp_create_nonce('custom-css').'" />';
	echo '<textarea name="custom_css" id="custom_css" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_custom_css',true).'</textarea>';
}
function save_custom_css($post_id) {
	if (!wp_verify_nonce($_POST['custom_css_noncename'], 'custom-css')) return $post_id;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
	$custom_css = $_POST['custom_css'];
	update_post_meta($post_id, '_custom_css', $custom_css);
}
function insert_custom_css() {
	if (is_page() || is_single()) {
		if (have_posts()) : while (have_posts()) : the_post();
			echo '<style type="text/css">'.get_post_meta(get_the_ID(), '_custom_css', true).'</style>';
		endwhile; endif;
		rewind_posts();
	}
}

//javascript記載可能にする
//Custom JS Widget
/////////////////////////////////////////////////////
add_action('admin_menu', 'custom_js_hooks');
add_action('save_post', 'save_custom_js');
add_action('wp_head','insert_custom_js');
function custom_js_hooks() {
	add_meta_box('custom_js', 'Custom JS', 'custom_js_input', 'post', 'normal', 'high');
	add_meta_box('custom_js', 'Custom JS', 'custom_js_input', 'page', 'normal', 'high');
}
function custom_js_input() {
	global $post;
	echo '<input type="hidden" name="custom_js_noncename" id="custom_js_noncename" value="'.wp_create_nonce('custom-js').'" />';
	echo '<textarea name="custom_js" id="custom_js" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_custom_js',true).'</textarea>';
}
function save_custom_js($post_id) {
	if (!wp_verify_nonce($_POST['custom_js_noncename'], 'custom-js')) return $post_id;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
	$custom_js = $_POST['custom_js'];
	update_post_meta($post_id, '_custom_js', $custom_js);
}
function insert_custom_js() {
	if (is_page() || is_single()) {
		if (have_posts()) : while (have_posts()) : the_post();
			echo '<script type="text/javascript">'.get_post_meta(get_the_ID(), '_custom_js', true).'</script>';
		endwhile; endif;
		rewind_posts();
	}
}

//管理画面フォント設定
/////////////////////////////////////////////////////
add_theme_support('editor-styles');
add_editor_style('editor-style.css');


//管理画面カテゴリ　並び順かえない
/////////////////////////////////////////////////////
function lig_wp_category_terms_checklist_no_top( $args, $post_id = null ) {
    $args['checked_ontop'] = false;
    return $args;
}
add_action( 'wp_terms_checklist_args', 'lig_wp_category_terms_checklist_no_top' );


//ページング
/////////////////////////////////////////////////////
function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
	 global $wp_query;
	 $pages = $wp_query->max_num_pages;
	 if(!$pages)
	 {
	     $pages = 1;
	 }
     }

     if(1 != $pages)
     {
	 echo "<div class=\"pagination_n clearfix\">";
	 if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
	 if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

	 for ($i=1; $i <= $pages; $i++)
	 {
	     if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
	     {
		 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
	     }
	 }

	 if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
	 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
	 echo "</div>\n";
     }
}

// バージョン更新を非表示にする
/////////////////////////////////////////////////////
//add_filter('pre_site_transient_update_core', '__return_zero');

// APIによるバージョンチェックの通信をさせない
/////////////////////////////////////////////////////
//remove_action('wp_version_check', 'wp_version_check');
//remove_action('admin_init', '_maybe_update_core');

// WPのバージョン隠す
/////////////////////////////////////////////////////
//remove_action('wp_head', 'wp_generator');

// 特定のプラグインのみ「更新通知」が届かないようにする
/////////////////////////////////////////////////////
add_filter('site_option__site_transient_update_plugins', 'filter_hide_update_notice');
function filter_hide_update_notice($data) {
    $plugin_name = 'booking-system/dopbs.php';
    if (isset($data->response[$plugin_name])) {
        unset($data->response[$plugin_name]);
    }
    return $data;
}

//固定ページ　親子判別
///////////////////////////////////////////////
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}

function ps_get_root_page( $cur_post, $cnt = 0 ) {
if ( $cnt > 100 ) { return false; }
$cnt++;
if ( $cur_post->post_parent == 0 ) {
$root_page = $cur_post;
} else {
$root_page = ps_get_root_page( get_post( $cur_post->post_parent ), $cnt );
}
return $root_page;
}

//自動整形関連
// remove_filter('the_content', 'wpautop');



// ショートコードインクルード
/////////////////////////////////////////////////////
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}

add_shortcode('myphp', 'Include_my_php');

add_theme_support('post-thumbnails');


// 親カテゴリ自動チェック
function category_parent_check_script() {
?>
<script>
jQuery(function($) {
  $('#taxonomy-category .children input').change(function() {
    function parentNodes(checked, nodes) {
      parents = nodes.parent().parent().parent().prev().children('input');
      if (parents.length != 0) {
        parents[0].checked = checked;
        parentNodes(checked, parents);
      }
    }
    var checked = $(this).is(':checked');
    $(this).parent().parent().siblings().children('label').children('input').each(function() {
      checked = checked || $(this).is(':checked');
    })
      parentNodes(checked, $(this));
  });
});
</script>
<?php
}
add_action('admin_head-post-new.php', 'category_parent_check_script');
add_action('admin_head-post.php', 'category_parent_check_script');



/* プラグインjsの削除 20201112 */
function cut_plugin_js() {
  //DOPBSP
    //TOPのみ削除
    if( is_home() || is_front_page() || is_page('21') || is_page('256') || is_page('443') || is_page('757')|| is_page('888') || is_page('3252') ||  is_page('2973') ||  is_page('3252') ||  is_page('4064') ){
        wp_deregister_script( 'DOP-js-jquery-dopselect' );
        wp_deregister_script( 'DOPBSP-js-frontend-calendar' );
        wp_deregister_script( 'DOPBSP-js-frontend' );
        wp_deregister_script( 'DOPBSP-js-frontend-deposit' );
        wp_deregister_script( 'DOPBSP-js-frontend-discounts' );
        wp_deregister_script( 'DOPBSP-js-frontend-fees' );
        wp_deregister_script( 'DOPBSP-js-frontend-rules' );
        wp_deregister_script( 'dot' );
        wp_deregister_script( 'dot-js' );
        wp_deregister_script( 'dot-js-calendar' );
        wp_deregister_script( 'dot-js-calendar-availability' );
        wp_deregister_script( 'dot-js-calendar-days' );
        wp_deregister_script( 'dot-js-calendar-day' );
        wp_deregister_script( 'dot-js-calendar-schedule' );
        wp_deregister_script( 'DOPBSP-js-frontend-calendar-js' );
    }
}
add_action( 'wp_print_scripts', 'cut_plugin_js', 100 );
/* プラグインCSSの削除 */
function cut_plugin_css() {
  if( is_home() || is_front_page() || is_page('21') || is_page('256') || is_page('443') || is_page('757')|| is_page('888') || is_page('3252') ||  is_page('2973') ||  is_page('3252') ||  is_page('4064') ){
    wp_deregister_style( 'DOPBSP-css-dopselect' );
  }
}
add_action( 'wp_enqueue_scripts', 'cut_plugin_css', 100 );
/*--------------------------------------------------------------*/
/*  レンダリングを妨げるリソースの除外 CSSのIDを遅延させる処理  */
/*--------------------------------------------------------------*/
function my_dequeue_plugin_files(){
  if ( is_home() || is_front_page() ){
    wp_dequeue_style('toc-screen');
  }
}
add_action( 'wp_enqueue_scripts', 'my_dequeue_plugin_files', 9999);
add_action('wp_head', 'my_dequeue_plugin_files', 9999);

function my_enqueue_plugin_files(){
  if ( is_home() || is_front_page() ){
    wp_dequeue_style('toc-screen');
  }
}
add_action('wp_footer', 'my_enqueue_plugin_files');

//WordPressのバージョンの表示
remove_action('wp_head', 'wp_generator');

//自動挿入されるDNSプリフェッチ用コードを削除
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );
function remove_dns_prefetch( $hints, $relation_type ) {
  if ( 'dns-prefetch' === $relation_type ) {
    return array_diff( wp_dependencies_unique_hosts(), $hints );
  }
  return $hints;
}
//デフォルトjQuery削除コード トップのみ
function delete_jquery() {
  if (!is_admin()) {
    if ( is_home() || is_front_page() || $_SERVER["REQUEST_URI"] === "/" ){
    wp_deregister_script('jquery');
    }
  }
}
add_action('init', 'delete_jquery');
//wp-block-library-css 削除
function dequeue_plugins_style() {
  if (!current_user_can('read')){
      //管理画面用のスタイル
      wp_deregister_style( 'wp-components' );
      wp_register_style( 'wp-components', false );
      //ブロックエディタ用のスタイル
      wp_deregister_style( 'wp-block-editor' );
      wp_register_style( 'wp-block-editor', false );
  }
}
add_action( 'wp_enqueue_scripts', 'dequeue_plugins_style', 9999);


//施術一覧のカスタム投稿タイプ
/////////////////////////////////////////////////////
function create_operations_post_type() {
  register_post_type('operations',
      array(
          'labels'      => array(
              'name'          => __('施術一覧', 'textdomain'),
              'singular_name' => __('施術', 'textdomain'),
          ),
          'public'      => true,
          'has_archive' => true, // ← 必ず `true` にする！
          'rewrite'     => array('slug' => 'operations'),
          'supports'    => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
          'menu_position' => 5,
          'menu_icon'   => 'dashicons-admin-customizer',
      )
  );
}
add_action('init', 'create_operations_post_type');

//施術一覧のカスタム投稿タイプのCSSとJS
/////////////////////////////////////////////////////
function enqueue_operations_assets() {
  if ( is_singular( 'operations' ) ) {
      $slug = get_post()->post_name;
      $css_uri = get_template_directory_uri() . "/custom/css/{$slug}.css";
      $css_path = get_template_directory()      . "/custom/css/{$slug}.css";
      if ( file_exists( $css_path ) ) {
          wp_enqueue_style( "operations-{$slug}", $css_uri, [], filemtime( $css_path ) );
      }
      $js_uri = get_template_directory_uri() . "/custom/js/{$slug}.js";
      $js_path = get_template_directory()      . "/custom/js/{$slug}.js";
      if ( file_exists( $js_path ) ) {
          wp_enqueue_script( "operations-{$slug}", $js_uri, [], filemtime( $js_path ), true );
      }
  }
}
add_action( 'wp_enqueue_scripts', 'enqueue_operations_assets' );


//カレンダーの「未承認」は枠から外す
/////////////////////////////////////////////////////
function get_available_slots($service_id, $date, $time) {
  global $wpdb;
  $table_name = $wpdb->prefix . 'booking_package_reservation';

  $approved_count = $wpdb->get_var( $wpdb->prepare(
      "SELECT COUNT(*) FROM $table_name 
       WHERE service_id = %d AND start = %s AND status = 'approved'", 
       $service_id, "{$date} {$time}"
  ));

  $max_slots = 3; // 1枠あたりの上限（固定なら）
  return max(0, $max_slots - $approved_count);
}
