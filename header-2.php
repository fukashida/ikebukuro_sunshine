<!DOCTYPE html>
<html lang="ja">
<head>

<script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
<script>
window.yjDataLayer = window.yjDataLayer || [];
function ytag() { yjDataLayer.push(arguments); }
ytag({"type":"ycl_cookie"});
</script>

<!-- Global site tag (gtag.js) - Google Ads: 468827335 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-468827335"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-468827335');
</script>

<?php
    $url = $_SERVER['REQUEST_URI'];
	if(strstr($url,'reservation/thanks.php')==true):
?>
<!-- Global site tag (gtag.js) - Google Ads: 985776742 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-985776742"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-985776742');
</script>
<!-- Event snippet for 予約 conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-985776742/Hx5lCKL1yQgQ5oSH1gM',
      'value': 1.0,
      'currency': 'JPY'
  });
</script>
<!-- Event snippet for Website traffic conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-468827335/-j-3CJWv2OsBEMf5xt8B'});
</script>
<?php endif; ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">


<PageMap>
	<DataObject type="thumbnail">
		<?php if(is_front_page()): ?>
		<Attribute name="src" value="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>/img/top/im_profile01.jpg"/>
		<?php else: ?>
		<Attribute name="src" value="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>"/>
		<?php endif; ?>
		<Attribute name="width" value="150"/>
		<Attribute name="height" value="150"/>
	</DataObject>
</PageMap>

<title><?php
if (is_front_page() || is_home()) { // top page title
    echo '&lt;公式&gt;池袋サンシャイン美容外科|東京・池袋の美容整形、美容皮膚科なら当院へ';
} else { // under pages title
    switch (true) {
        case is_page() || is_single():
            $title = get_post_meta( $post->ID, 'title', true );
            echo $title ? $title : get_the_title();
            break;
        case is_archive() || is_category():
            if (preg_match('/^\/blogs\/$/' ,$_SERVER['REQUEST_URI'])) {
                echo 'ブログ';
            } else {
				$cats = get_the_category();
                foreach( $cats as $cat) {
					if ($cat->term_id !== 37) {
						echo $cat->cat_name;
					}
                }
			}
			break;
        case preg_match('/inquiry/', $_SERVER['REQUEST_URI'], $matches) != 0:
            echo 'お問い合わせ';
            break;
        case preg_match('/reservation/', $_SERVER['REQUEST_URI'], $matches) != 0:
            echo 'カウンセリング予約';
			break;
        default:
            echo get_the_title();
            break;
    }
    include (STYLESHEETPATH . '/txt_header.php');
}
?></title>

<?php //meta descriptionの設定
if ( is_home() || is_front_page() ) : ?>
	<meta name="description" content="東京・池袋の美容外科、美容皮膚科なら池袋サンシャイン美容外科。保険適用 が可能な治療から自由診療まで幅広く対応しております。ほくろ、イボ、わきが、傷跡治療 等をご希望の方はぜひご相談ください。" />
<?php else : ?>
	<?php
	$post_id = get_the_ID();
	$custom_fields = get_post_custom();
	$description = isset($custom_fields['description']) ? $custom_fields['description'] : null;

	if (!empty($description)) { ?>
		<meta name="description" content="<?php echo esc_attr(get_post_meta($post_id, 'description', true)); ?>" />
	<?php } elseif (preg_match('/inquiry/', $_SERVER['REQUEST_URI'])) { ?>
		<meta name="description" content="池袋サンシャイン美容外科は保険診療でワキガ治療の手術（片ワキ約2万円）が受けられるクリニックです。また、ほくろ・イボ除去も保険適用が可能です。その他、にきびや傷跡修正に効果的なレーザー治療も行っております。｜お問い合わせ" />
	<?php } elseif (preg_match('/reservation/', $_SERVER['REQUEST_URI'])) { ?>
		<meta name="description" content="池袋サンシャイン美容外科は保険診療でワキガ治療の手術（片ワキ約2万円）が受けられるクリニックです。また、ほくろ・イボ除去も保険適用が可能です。その他、にきびや傷跡修正に効果的なレーザー治療も行っております。｜カウンセリング予約" />
	<?php } else { ?>
		<meta name="description" content="池袋サンシャイン美容外科は保険診療でワキガ治療の手術（片ワキ約2万円）が受けられるクリニックです。また、ほくろ・イボ除去も保険適用が可能です。その他、にきびや傷跡修正に効果的なレーザー治療も行っております。" />
	<?php } ?>
<?php endif; ?>


<?php //meta keywordsの設定
$custom_fields = get_post_custom();
$keywords = isset($custom_fields['keywords']) ? $custom_fields['keywords'] : null;
if ($keywords != null) { ?>
	<meta name="keywords" content="<?php echo get_post_meta($post->ID, 'keywords', true); ?>" />
<?php } else if (preg_match('/inquiry/', $_SERVER['REQUEST_URI']) != 0) { ?>
	<meta name="keywords" content="美容外科,美容皮膚科,東京,池袋サンシャイン美容外科,お問い合わせ" />
<?php } else if (preg_match('/reservation/', $_SERVER['REQUEST_URI']) != 0) { ?>
	<meta name="keywords" content="美容外科,美容皮膚科,東京,池袋サンシャイン美容外科,カウンセリング予約" />
<?php } else { ?>
	<meta name="keywords" content="美容外科,美容皮膚科,東京,池袋サンシャイン美容外科" />
<?php } ?>


<!-- <link href="/wp-content/themes/ikesunshine_base/style.css" rel="stylesheet" type="text/css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/reset.css" />

<?php if ( is_home() || is_front_page() ) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/common.css?<?php echo filemtime( get_template_directory() . '/common/css/common.css'); ?>" />
<link rel="stylesheet" rel="preload" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/common_index.css?<?php echo filemtime( get_template_directory() . '/common/css/common_index.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet';" />

<?php elseif ( is_post_type_archive('operations') || strpos($_SERVER['REQUEST_URI'], '/operations/') !== false ) : ?>
<!-- /operations/ のページで operations.css を適用 -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/operations.css?<?php echo filemtime( get_template_directory() . '/css/operations.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/common.css?<?php echo filemtime( get_template_directory() . '/common/css/common.css'); ?>" />

<?php else: ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/common.css?<?php echo filemtime( get_template_directory() . '/common/css/common.css'); ?>" />
<?php endif; ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/fontello.css"/>


<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/ie.css" />
<![endif]-->
<?php if (preg_match('/blogs/', $_SERVER['REQUEST_URI'], $matches) != 0) {  ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/blogs.css?<?php echo filemtime( get_template_directory() . '/css/blogs.css'); ?>">
<?php } elseif (is_home()) {  ?>
<link rel="stylesheet" rel="preload" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/index.css?<?php echo filemtime( get_template_directory() . '/css/index.css'); ?>" as="style">
<?php } elseif(is_page('1500')) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/index.css?<?php echo filemtime( get_template_directory() . '/css/index.css'); ?>">
<?php } elseif(is_page('4064')) { ?>
<?php } elseif( is_page('2973') ) { ?>
<?php } elseif(is_page()) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/<?php $root_slug = ps_get_root_page( $post );
$root_slug = $root_slug->post_name;
echo $root_slug
?>.css?<?php echo filemtime( get_template_directory() . '/css/' . $root_slug . '.css'); ?>">

<?php } elseif (is_category() || is_single() || is_search()){ ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/news.css?<?php echo filemtime( get_template_directory() . '/css/news.css'); ?>">
<?php } elseif (preg_match('/reservation/', $_SERVER['REQUEST_URI'], $matches) != 0  || preg_match('/inquiry/', $_SERVER['REQUEST_URI'], $matches) != 0){  ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/form.css?<?php echo filemtime( get_template_directory() . '/css/form.css'); ?>">
<?php } ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.min.js"></script>
<!-- ハンバーガーメニュー -->
<script defer type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/modernizr.js"></script>
<script defer type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/common.js?<?php echo filemtime( get_template_directory() . '/common/js/common.js'); ?>"></script>
<!-- 施術ページ用js -->
<script defer type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/operations.js?<?php echo filemtime( get_template_directory() . '/common/js/operations.js'); ?>"></script>
<!-- 画像遅延読み込み -->
<script defer type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/lazysizes.min.js"></script>
<!-- background-image webp対応-->
<script defer src="<?php echo get_template_directory_uri(); ?>/common/js/modernizr-custom.js"></script>
<?php if ( is_home() || is_front_page() || is_page('21') || is_page('3252') ||  is_page('2973') ||  is_page('4064') ) : ?>
<?php else: ?>
	<!-- FlexSlider -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/js/flexslider/flexslider.css" type="text/css" media="screen"/>
	<script defer src="<?php echo get_template_directory_uri(); ?>/common/js/flexslider/jquery.flexslider.js"></script>
<?php endif; ?>

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

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/html5shiv-printshiv.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/css3-mediaqueries.js"></script>
<![endif]-->

<?php if ( is_home() || is_front_page() || is_page('19') || is_page('21') || is_page('256') || is_page('443') || is_page('757') || is_page('888') || is_page('3252') ||  is_page('2973') ||  is_page('4064') ) : ?>
<?php else: ?>
<!-- scroll カスタマイズ -->
<link href="<?php echo get_template_directory_uri(); ?>/common/js/scroll/jquery.mCustomScrollbar.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/scroll/jquery-mousewheel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/scroll/jquery.mCustomScrollbar.js"></script>
<!-- end -->
<?php endif; ?>

<?php $h1 = is_front_page() || is_home() ? 'h1' : 'p'; ?>

<?php if ( is_page('443')) : ?>
	<link rel="preload" as="image" href="https://ike-sunshine.co.jp/wp-content/uploads/2021/03/nayami_list_bg.png.webp" />
<?php endif; ?>

<meta name="google-site-verification" content="fcGadrY2LGZJmqtUdcZFksP27ZwiYLWCZD2S2CKEuT4" />
<link rel="preload" as="script" href="https://www.googletagmanager.com/gtm.js?id=GTM-K3VWD9V">
<link rel="preload" as="script" href="https://www.googletagmanager.com/gtm.js?id=GTM-P6FKHXM">
<?php wp_head(); ?>
</head>
<?php
    $url = $_SERVER['REQUEST_URI'];
	if(strstr($url,'reservation/thanks.php')==true):
?>
<script>
  fbq('track', 'Schedule');
</script>
<?php endif; ?>
<?php if ( is_page('mwlift')  ) : ?>
<script type="application/ld+json">
{
    "@context" : "https://schema.org",
    "@type" : "MedicalClinic",
    "name" : "糸リフトアップ（MWリフト）｜たるんだ皮膚をしっかり引き上げ、持続性に優れた糸によるリフトアップの解説｜リフトアップ、糸リフトなら池袋サンシャイン美容外科",
    "founder": "鈴木栄樹",
    "description" : "糸リフトアップ（MWリフト）の施術紹介。MWリフトによる切らないフェイスリフト、顔のリフトアップを解説しています。当院の糸リフトアップはたるみ改善だけでなく小顔効果も得られます。",
    "url" : "https://www.ike-sunshine.co.jp/operations/mwlift/",
    "image": "https://www.ike-sunshine.co.jp/wp-content/uploads/2021/02/PC_ISC_mwr_image11.png.webp",
    "telephone" : "+81-0120-331-244",
    "priceRange": "5,000円～",
    "address": {
        "@type": "PostalAddress",
        "addressRegion": "東京都",
        "addressLocality": "豊島区",
        "postalCode": "170－0013",
        "streetAddress": "東京都豊島区東池袋1-15-3 近代ビル9F",
        "addressCountry": "JP"
    },
    "contactPoint": [
        {
            "@type": "ContactPoint",
            "url": "/reservation/",
            "contactType": "customer service"
        }
    ]
}
</script>
</script>
<?php elseif ( is_page('skincare')  ) : ?>
<script type="application/ld+json">
{
    "@context" : "https://schema.org",
    "@type" : "MedicalClinic",
    "name" : "ほくろ除去・イボ治療｜短時間で完了のほくろ除去・イボ治療についての解説。東京で保険適用、土日も診療｜東京でニキビ治療、ニキビ跡治療なら池袋サンシャイン美容外科",
"founder":"鈴木栄樹",
    "description" : "ほくろ除去・イボ治療の施術紹介。東京で保険適用・土日も診療の池袋サンシャイン美容外科は、ほくろ・イボを1回で取り切り完了を目指して治療します。",
    "url" : "https://www.ike-sunshine.co.jp/operations/skincare/",
    "image": "https://www.ike-sunshine.co.jp/wp-content/uploads/2021/01/aec659d50afa8e0ce48c82e4ea662d7d.png.webp",
    "telephone" : "+81-0120-331-244", //電話番号
    "priceRange": "8,000円～",
    "address": {
        "@type": "PostalAddress",
                "addressRegion": "東京都",
        "addressLocality": "豊島区",
        "postalCode": "170－0013",
        "streetAddress": "東京都豊島区東池袋1-15-3　近代ビル9F",
        "addressCountry": "JP"
    },
    "contactPoint" :[
        { "@type" : "ContactPoint",
         "url" : "/reservation/",
        "contactType" : "customer service"
        }
        ],
}
</script>
<?php elseif ( is_page('iboaza')  ) : ?>
<script type="application/ld+json">
{
    "@context" : "https://schema.org",
    "@type" : "MedicalClinic",
    "name" : "あざ・いぼ・大きなホクロの保険適用手術｜東京で保険適用、土日も診療のほくろ除去、いぼ治療。｜東京であざ・いぼ・大きなホクロ除去なら池袋サンシャイン美容外科",
"founder":"鈴木栄樹",
    "description" : "あざ・いぼ・大きなホクロの保険適用手術の施術紹介。東京で土日も診療の池袋サンシャイン美容外科では、あざ・いぼ・大きなホクロ除去を保険適用で手術が可能です。",
    "url" : "https://www.ike-sunshine.co.jp/operations/iboaza",
    "image": "https://www.ike-sunshine.co.jp/wp-content/uploads/2021/03/worry_pic03.png.webp",
    "telephone" : "+81-0120-331-244", //電話番号
    "priceRange": "8,000円～",
    "address": {
        "@type": "PostalAddress",
                "addressRegion": "東京都",
        "addressLocality": "豊島区",
        "postalCode": "170－0013",
        "streetAddress": "東京都豊島区東池袋1-15-3　近代ビル9F",
        "addressCountry": "JP"
    },
    "contactPoint" :[
        { "@type" : "ContactPoint",
         "url" : "/reservation/",
        "contactType" : "customer service"
        }
        ],
}
</script>
<?php elseif ( is_page('laser')  ) : ?>
<script type="application/ld+json">
{
    "@context" : "https://schema.org",
    "@type" : "MedicalClinic",
    "name" : "リストカット傷跡治療レーザー｜レーザーの力でしっかりとリストカット傷跡を治療｜東京でリストカット傷跡治療レーザーなら池袋サンシャイン美容外科",
"founder":"鈴木栄樹",
    "description" : "リストカット傷跡治療レーザーの施術紹介。東京で土日も診療の池袋サンシャイン美容外科では、レーザー治療によるリストカット・傷跡・火傷跡・手術跡といった目立つ傷跡を綺麗にする治療を行なっております。",
    "url" : "https://www.ike-sunshine.co.jp/operations/laser/",
    "image": "https://www.ike-sunshine.co.jp/wp-content/uploads/2021/03/top-1.png.webp",
    "telephone" : "+81-0120-331-244", //電話番号
    "priceRange": "35,100円～",
    "address": {
        "@type": "PostalAddress",
                "addressRegion": "東京都",
        "addressLocality": "豊島区",
        "postalCode": "170－0013",
        "streetAddress": "東京都豊島区東池袋1-15-3　近代ビル9F",
        "addressCountry": "JP"
    },
    "contactPoint" :[
        { "@type" : "ContactPoint",
         "url" : "/reservation/",
        "contactType" : "customer service"
        }
        ],
}
</script>
<?php elseif ( is_page('nikibi')  ) : ?>
<script type="application/ld+json">
{
    "@context" : "https://schema.org",
    "@type" : "MedicalClinic",
    "name" : "ニキビ・ニキビ跡治療｜スターラックス1540によるレーザー治療をメインにニキビ・ニキビ跡治療の解説｜東京でニキビ治療、ニキビ跡治療なら池袋サンシャイン美容外科",
"founder":"鈴木栄樹",
    "description" : "ニキビ・ニキビ跡治療の施術紹介。池袋サンシャイン美容外科は痛くなく、傷跡や内出血の心配がない最新のにきび治療と定番の治療を組み合わせてニキビ・ニキビ跡を治療します。",
    "url" : "https://www.ike-sunshine.co.jp/operations/nikibi/",
    "image": "https://www.ike-sunshine.co.jp/wp-content/uploads/ISC_21_PC_nikibi_09.png.webp",
    "telephone" : "+81-0120-331-244", //電話番号
    "priceRange": "5,500円～",
    "address": {
        "@type": "PostalAddress",
                "addressRegion": "東京都",
        "addressLocality": "豊島区",
        "postalCode": "170－0013",
        "streetAddress": "東京都豊島区東池袋1-15-3　近代ビル9F",
        "addressCountry": "JP"
    },
    "contactPoint" :[
        { "@type" : "ContactPoint",
         "url" : "/reservation/",
        "contactType" : "customer service"
        }
        ],
}
</script>
<?php elseif ( is_page('shiwa')  ) : ?>
<script type="application/ld+json">
{
    "@context" : "https://schema.org",
    "@type" : "MedicalClinic",
    "name" : "交通事故や傷害による傷跡治療｜交通事故や傷害による傷跡治療、自己負担0円で可能！｜東京で交通事故や傷害による傷跡治療なら池袋サンシャイン美容外科",
"founder":"鈴木栄樹",
    "description" : "美容整形、美容外科は池袋サンシャイン美容外科。当院の施術は、リフトアップ・糸リフト、ほくろ除去、タトゥー除去・入れ墨除去・刺青除去、傷跡修正、ニキビ跡治療などを行なっております。",
    "url" : "https://www.ike-sunshine.co.jp/operations/shiwa",
    "image": "https://www.ike-sunshine.co.jp/common/img/IS_PC_ai_30.webp",
    "telephone" : "+81-0120-331-244", //電話番号
    "priceRange": "5,000円～",
    "address": {
        "@type": "PostalAddress",
                "addressRegion": "東京都",
        "addressLocality": "豊島区",
        "postalCode": "170－0013",
        "streetAddress": "東京都豊島区東池袋1-15-3　近代ビル9F",
        "addressCountry": "JP"
    },
    "contactPoint" :[
        { "@type" : "ContactPoint",
         "url" : "/reservation/",
        "contactType" : "customer service"
        }
        ],
}
</script>
<?php elseif ( is_page('bodyline')  ) : ?>
<script type="application/ld+json">
{
    "@context" : "https://schema.org",
    "@type" : "MedicalClinic",
    "name" : "タトゥー（刺青、入れ墨）除去手術｜タトゥー除去、刺青除去、入れ墨除去は、術後のキレイさ・仕上がりが重要です。｜東京で刺青・タトゥー除去手術なら池袋サンシャイン美容外科",
"founder":"鈴木栄樹",
    "description" : "タトゥー（刺青、入れ墨）除去手術の施術紹介。東京で土日も診療の池袋サンシャイン美容外科は、短時間・短期間でのタトゥー（刺青、入れ墨）除去をレーザーではなく皮膚切除にて行ないます。",
    "url" : "https://www.ike-sunshine.co.jp/operations/bodyline/",
    "image": "https://www.ike-sunshine.co.jp/wp-content/uploads/2021/03/bodyline-top-1.jpg.webp",
    "telephone" : "+81-0120-331-244", //電話番号
    "priceRange": "8,000円～",
    "address": {
        "@type": "PostalAddress",
                "addressRegion": "東京都",
        "addressLocality": "豊島区",
        "postalCode": "170－0013",
        "streetAddress": "東京都豊島区東池袋1-15-3　近代ビル9F",
        "addressCountry": "JP"
    },
    "contactPoint" :[
        { "@type" : "ContactPoint",
         "url" : "/reservation/",
        "contactType" : "customer service"
        }
        ],
}
</script>
<?php endif; ?>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3VWD9V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6FKHXM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="bodyWrap">
<div id="header">
	<header>
	<div id="headWrap">
		<?php if( is_home() || is_front_page() ) :  ?>
			<h1 id="headText">池袋サンシャイン美容外科</h1>
		<?php else: ?>
			<h1 id="headText"><a href="/">池袋サンシャイン美容外科</a></h1>
		<?php endif; ?>
	</div>
		<p id="headTel"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/common/img/im_head_tel_dark.webp" type='image/webp'><img src="<?php echo get_template_directory_uri(); ?>/common/img/im_head_tel_dark.png" loading="lazy" width="201" height="36" alt="0120-331-244　受付時間：9:00～17:30（完全予約制）" data-eio="p"></picture></p>
		<ul id="headContact">
			<li><a href="/reservation/" class="c-orange">カウンセリング予約</a></li>
			<li><a href="/inquiry/">お問い合わせ</a></li>
		</ul>
		<div id="gnav">
			<nav>
				<ul class="clrfix">
					<li><a href="/"><span>ホーム</span><br>Home</a></li>
					<li><a href="/operations/"><span>施術一覧</span><br>Menu</a></li>
					<li><a href="/charge/"><span>料金</span><br>Price</a></li>
					<li><a href="/flow/"><span>ご利用の流れ</span><br>Step</a></li>
					<li><a href="/greetings/"><span>院長紹介</span><br>Docter</a></li>
					<li><a href="/map/"><span>当院について</span><br>About</a></li>
                    <li><a href="/blogs/"><span>ブログ</span><br>Blog</a></li>
				</ul>
			</nav>
		</div>
		<ul id="headNav">
			<li><a href="/recruit/">スタッフ募集</a></li>
		</ul>
		<a class="spMenu"><span class="icon-menu-1"></span></a>
		<ul class="spNav">
			<li><a href="/operations/"><img src="<?php echo get_template_directory_uri(); ?>/common/img/sp_ic04.png" alt="治療メニュー">治療メニュー</a></li>
			<li><a href="/charge/"><img src="<?php echo get_template_directory_uri(); ?>/common/img/sp_ic03.png" alt="料金一覧">料金一覧</a></li>
			<li><a href="/blogs/"><img src="<?php echo get_template_directory_uri(); ?>/common/img/sp_ic_blog.png" alt="ブログ">ブログ</a></li>
			<li><a href="/flow/"><img src="<?php echo get_template_directory_uri(); ?>/common/img/sp_ic_flow.png" alt="ご利用の流れ">ご利用の流れ</a></li>
			<li><a href="/greetings/"><img src="<?php echo get_template_directory_uri(); ?>/common/img/sp_ic01.png" alt="院長紹介">院長紹介</a></li>
			<li><a href="/map/"><img src="<?php echo get_template_directory_uri(); ?>/common/img/sp_ic02.png" alt="アクセス・医院概要">アクセス・医院概要</a></li>
			<li class="bg"><a href="tel:0120331244"><img src="<?php echo get_template_directory_uri(); ?>/common/img/sp_ic_tel.png" alt="電話によるご予約">電話によるご予約</a></li>
			<li class="bg"><a href="/reservation/"><img src="<?php echo get_template_directory_uri(); ?>/common/img/sp_ic_mail.png" alt="WEB予約フォーム">WEB予約フォーム</a></li>
			<li>
				<!--sns icon-->
				<ul class="sns-link">
					<!-- <li><a href="https://page.line.me/xdy5304p" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/top/sns_icon_line.png" alt="LINE＠" loading="lazy"></a></li> -->
					<li><a href="https://twitter.com/ikesunshine?ref_src=twsrc%5Etfw" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/top/sns_icon_twitter.png" alt="ツイッター" loading="lazy"></a></li>
					<li><a href="https://www.instagram.com/ikesunshine331244/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/top/sns_icon_insta.png" alt="インスタグラム" loading="lazy"></a></li>
					<!-- <li><a href="https://www.facebook.com/ikesunshine2016/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/top/sns_icon_fb.png" alt="フェイスブック" loading="lazy"></a></li> -->
				</ul>
				<!--/sns icon-->
			</li>
		</ul>
		<div class="spHeadNav">
			<ul class="contact">
				<li><a href="tel:0120331244"><span class="icon-phone"></span><br>お電話</a></li>
				<li><a href="#sideReservation"><span class="icon-mail-alt"></span><br>メール</a></li>
				<li><a href="/map/"><span class="icon-location"></span><br>地図</a></li>
				<li><a href="#sideReservation"><span class="icon-search"></span><br>検索</a></li>
			</ul>
			<a class="spBtn">メニューを開く</a>
		</div>


	</header>
</div>
<!--/#header-->

<?php if( is_home() || is_front_page() ) :  ?>
<?php else: ?>
<!--/topVi-->
<div id="container">
<?php endif; ?>
