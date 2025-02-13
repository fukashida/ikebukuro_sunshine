<!DOCTYPE html>
<html lang="ja">
<head>

<script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
<script>
window.yjDataLayer = window.yjDataLayer || [];
function ytag() { yjDataLayer.push(arguments); }
ytag({"type":"ycl_cookie"});
</script>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="format-detection" content="telephone=no">
<?php if ( is_home() || is_front_page() ) : ?>
<meta name="description" content="東京・池袋の美容外科、美容皮膚科なら池袋サンシャイン美容外科。保険適用 が可能な治療から自由診療まで幅広く対応しております。ほくろ、イボ、わきが、傷跡治療 等をご希望の方はぜひご相談ください。" />
<?php else : ?>
<?php //meta descriptionの設定
$custom_fields = get_post_custom();
$description = $custom_fields['description'];
if ($description != null) { ?>
<meta name="description" content="<?php echo get_post_meta($post->ID,'description',true); ?>" />
<?php } else if ($description == null && preg_match('/inquiry/', $_SERVER['REQUEST_URI'], $matches) != 0) { ?>
<meta name="description" content="池袋サンシャイン美容外科は保険診療でワキガ治療の手術（片ワキ約2万円）が受けられるクリニックです。また、ほくろ・イボ除去も保険適用が可能です。その他、にきびや傷跡修正に効果的なレーザー治療も行っております。｜お問い合わせ" />
<?php } else if ($description == null && preg_match('/reservation/', $_SERVER['REQUEST_URI'], $matches) != 0) { ?>
<meta name="description" content="池袋サンシャイン美容外科は保険診療でワキガ治療の手術（片ワキ約2万円）が受けられるクリニックです。また、ほくろ・イボ除去も保険適用が可能です。その他、にきびや傷跡修正に効果的なレーザー治療も行っております。｜カウンセリング予約" />
<?php } else {　?>
<meta name="description" content="池袋サンシャイン美容外科は保険診療でワキガ治療の手術（片ワキ約2万円）が受けられるクリニックです。また、ほくろ・イボ除去も保険適用が可能です。その他、にきびや傷跡修正に効果的なレーザー治療も行っております。" />
<?php } ?><?php endif; ?>
<?php //meta keywordsの設定
$custom_fields = get_post_custom();
$keywords = $custom_fields['keywords'];
if ($keywords != null) { ?>
<meta name="keywords" content="<?php echo get_post_meta($post->ID,'keywords',true); ?>" />
<?php } else if ($keywords == null && preg_match('/inquiry/', $_SERVER['REQUEST_URI'], $matches) != 0) { ?>
<meta name="keywords" content="美容外科,美容皮膚科,東京,池袋サンシャイン美容外科,お問い合わせ" />
<?php } else if ($keywords == null && preg_match('/reservation/', $_SERVER['REQUEST_URI'], $matches) != 0) { ?>
<meta name="keywords" content="美容外科,美容皮膚科,東京,池袋サンシャイン美容外科,カウンセリング予約" />
<?php } else {　?>
<meta name="keywords" content="美容外科,美容皮膚科,東京,池袋サンシャイン美容外科" />
<?php } ?>
<title><?php if (preg_match('/blogs/', $_SERVER['REQUEST_URI'], $matches) != 0) {  ?><?php the_title(); ?>
<?php } elseif(is_home()) {  ?>
<?php include (STYLESHEETPATH . '/txt_header.php'); ?>
<?php } elseif(is_page()) { ?>
<?php if(get_post_meta( $post->ID, 'title', true )): ?>
<?php echo get_post_meta($post->ID, 'title', true); ?>
<?php else: ?>
<?php the_title(); ?>｜<?php include (STYLESHEETPATH . '/txt_header.php'); ?>
<?php endif; ?>
<?php } elseif(is_single()) {  ?>
<?php if(get_post_meta( $post->ID, 'title', true )): ?>
<?php echo get_post_meta($post->ID, 'title', true); ?>
<?php else: ?>
<?php the_title(); ?>
｜
<?php include (STYLESHEETPATH . '/txt_header.php'); ?>
<?php endif; ?>
<?php } elseif(is_category()) { ?>
<?php $cats = get_the_category(); foreach( $cats as $cat) { echo $cat->cat_name; } ?>
｜
<?php include (STYLESHEETPATH . '/txt_header.php'); ?>
<?php } else if (preg_match('/inquiry/', $_SERVER['REQUEST_URI'], $matches) != 0) {  ?>お問い合わせ｜<?php include (STYLESHEETPATH . '/txt_header.php'); ?>
<?php } else if (preg_match('/reservation/', $_SERVER['REQUEST_URI'], $matches) != 0) {  ?>カウンセリング予約｜<?php include (STYLESHEETPATH . '/txt_header.php'); ?>
<?php } else {  ?>
<?php include (STYLESHEETPATH . '/txt_header.php'); ?>
<?php } ?>
</title>
<link href="/wp-content/themes/ikesunshine_base/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/common/css/reset.css" />
<link rel="stylesheet" type="text/css" href="/common/css/common.css" />
<link rel="stylesheet" type="text/css" href="/common/css/fontello.css" />
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="/common/css/ie.css" />
<![endif]-->
<?php if (preg_match('/blogs/', $_SERVER['REQUEST_URI'], $matches) != 0) {  ?>
<link rel="stylesheet" type="text/css" href="/css/blogs.css">
<?php } elseif (is_home()) {  ?>
<link rel="stylesheet" type="text/css" href="/css/index.css">
<link rel="stylesheet" type="text/css" href="/css/jquery.bxslider.css">
<?php } elseif(is_page('1500')) { ?>
<link rel="stylesheet" type="text/css" href="/css/index.css">
<?php } elseif(is_page()) { ?>
<link rel="stylesheet" type="text/css" href="/css/<?php $root_slug = ps_get_root_page( $post );
$root_slug = $root_slug->post_name;
echo $root_slug
?>.css">
<?php } elseif (is_category() || is_single() || is_search()){ ?>
<link rel="stylesheet" type="text/css" href="/css/news.css">
<?php } elseif (preg_match('/reservation/', $_SERVER['REQUEST_URI'], $matches) != 0  || preg_match('/inquiry/', $_SERVER['REQUEST_URI'], $matches) != 0){  ?>
<link rel="stylesheet" type="text/css" href="/css/form.css">
<?php } ?>
<script type="text/javascript" src="/common/js/jquery.min.js"></script>
<script type="text/javascript" src="/common/js/modernizr.js"></script>
<script type="text/javascript" src="/common/js/common.js"></script>

	<!-- datepicker -->
	<link rel="stylesheet" href="/css/jquery-ui.min.css" />
	<script type="text/javascript" src="/common/js/form/jquery.ui.core.min.js"></script>
	<script type="text/javascript" src="/common/js/form/jquery.ui.datepicker.min.js"></script>
	<script type="text/javascript" src="/common/js/form/jquery.ui.datepicker-ja.min.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K3VWD9V');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P6FKHXM');</script>
<!-- End Google Tag Manager -->

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1898401233615527');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1898401233615527&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!--[if lt IE 9]>
<script src="/common/js/html5shiv-printshiv.js"></script>
<script src="/common/js/css3-mediaqueries.js"></script>
<![endif]-->

<!-- scroll カスタマイズ -->
<link href="/common/js/scroll/jquery.mCustomScrollbar.css" rel="stylesheet">
<script type="text/javascript" src="/common/js/scroll/jquery-mousewheel.js"></script>
<script type="text/javascript" src="/common/js/scroll/jquery.mCustomScrollbar.js"></script>
<?php if (is_home()) { ?>
<script type="text/javascript" src="/common/js/jquery.bxslider.min.js"></script>
<?php } ?>
<script type="text/javascript">
$(function(){ $(".cScroll").mCustomScrollbar(); });
<?php if (is_home()) { ?>
$(document).ready(function(){
    $('.bxslider').bxSlider({
        auto: true,
        mode: 'fade',
        speed: 1000,
        pause: 5000
    });
});
<?php } ?>
<?php if (is_home()) { ?>
$(document).ready(function(){
if(_ua.Mobile){
$('#pickupTreatment').insertBefore('#first_block');
$('#topTrouble').insertBefore('#first_block');
}
});
<?php } ?>


</script>
<!-- end -->


<?php wp_head(); ?>
</head>
<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3VWD9V"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6FKHXM"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
<div id="container">
