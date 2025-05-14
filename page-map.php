<?php get_header(); ?>

<div class="breadcrumbs">
<ol class="clrfix">
<li><a href="/">HOME</a></li>
<?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) { ?><li><a href="<?php echo get_page_link( $parid );?>"><?php echo get_page($parid)->post_title; ?></a></li>
<?php } ?>
<li><?php the_title(); ?></li>
</ol>
</div>

<div id="mainContents">
<main>
<div id="pageTitle" class="<?php echo get_page($page_id)->post_name; ?>">
<h1><?php the_title(); ?></h1>
<?php if(get_post_meta( $post->ID, 'titlesub', true )): ?>
<p><?php echo get_post_meta($post->ID,'titlesub', true);?></p>
<?php endif; ?>
</div>

<!--/#mainContents-->

<section class="secBox">
<h3 class="baseTitle">アクセスマップ</h3>
<p class="textC mb20"><img src="<?php echo get_template_directory_uri(); ?>/img/map/im_map.gif" alt="マップ"></p>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25910.494977161394!2d139.714794!3d35.730845!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d66478657c1%3A0xb1fc479363821a13!2z5rGg6KKL44K144Oz44K344Oj44Kk44Oz576O5a655aSW56eR!5e0!3m2!1sja!2sjp!4v1740377236610!5m2!1sja!2sjp" width="100%" height="350" style="border:0;margin:auto;display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<a href="https://goo.gl/maps/QWNKhVGFX8Q6GHMV8" class="icon" target="_blank" rel="noopener noreferrer">大きな地図で見る</a>
</section>
<section class="secBox">
<h3 class="baseTitle">池袋サンシャイン美容外科 池袋院</h3>
<div class="baseTbl01 spTbl01 mb30">
<table>
<tr>
<th>住所</th>
<td>〒170－0013　東京都豊島区東池袋1-15-3　近代ビル9F</td>
</tr>
<tr>
<th>電話・FAX番号</th>
<td>TEL.03-3987-5115 / FAX.03-3987-5080</td>
</tr>
<tr>
<th>Eメール</th>
<td><a href="mailto:info@spirits-club.jp">info@spirits-club.jp</a></td>
</tr>
<tr>
<th>診療時間</th>
<td>10:00～19:00 (完全予約制)</td>
</tr>
<tr>
<th>定休日</th>
<td>火曜・木曜</td>
</tr>
<tr>
<th>交通</th>
<td>「池袋」駅東口より徒歩5分<br />〈JR〉  山手線　埼京線<br />〈東武東上線〉<br />〈西武池袋線〉<br />〈東京メトロ〉   丸の内線　有楽町線 </td>
</tr>
</table>
</div>
</section>

<!--/#mainContents-->

</main>
</div>
<div class="breadcrumbs">
<ol class="clrfix">
<li><a href="/">HOME</a></li>
<?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) { ?><li><a href="<?php echo get_page_link( $parid );?>"><?php echo get_page($parid)->post_title; ?></a></li>
<?php } ?>
<li><?php the_title(); ?></li>
</ol>
</div>

<?php include (STYLESHEETPATH . '/sidecontact.php'); ?>

<?php get_footer(); ?>
