<?php get_header(); ?>

<div class="breadcrumbs">
	<ol class="clrfix">
		<li><a href="/">HOME</a></li>
		<!-- 
		<?php if ( $GLOBALS['blog_id'] == 2 ) { ?>
		<li><a href="<?php bloginfo('url'); ?>">
			<?php bloginfo('name') ?>
			</a></li>
		<li>
			<?php
foreach((get_the_category()) as $cat) {
$cat_id = $cat->cat_ID ;
break ;
}
$category_link = get_category_link( $cat_id );
?>
			<a href="<?php echo $category_link; ?>" title="<?php echo $cat->cat_name; ?>"> <?php echo $cat->cat_name; ?></a> </li>
		<?php } else { ?>
		 -->
		<li>
			<?php
foreach((get_the_category()) as $cat) {
$cat_id = $cat->cat_ID ;
break ;
}
$category_link = get_category_link( $cat_id );
?>
			<a href="<?php echo $category_link; ?>" title="<?php echo $cat->cat_name; ?>"> <?php echo $cat->cat_name; ?></a> </li>
		<?php } ?>
		<li>
			<?php the_title(); ?>
		</li>
	</ol>
</div>

<!--/ここからコンテンツ-->
<div id="mainContents">
<main>
<!-- 
<?php if ( $GLOBALS['blog_id'] == 2 ) { ?>
<div id="pageTitle" class="blogs">
	<h2>
		<?php bloginfo('name') ?>
	</h2>
	<?php } else { ?>
	 -->
	<div id="pageTitle" class="news">
		<?php
	$category = get_the_category();
	$cat_id   = $category[0]->cat_ID;
	$cat_name = $category[0]->cat_name;
	$cat_slug = $category[0]->category_nicename;
?>

		<div class="categoryName">
			<!-- <?php echo $cat_name; ?> -->
			<?php $cats = get_the_category();
			$current_cat = '';
			foreach ( $cats as $cat ) {
			    if ( ! $current_cat || cat_is_ancestor_of( $current_cat, $cat ) ) {
			        $current_cat = $cat;
			    }
			} ?>
			<?php echo $current_cat->cat_name; ?>
		</div>
		<?php } ?>
	</div>
	<?php query_posts($query_string . "posts_per_page=1"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php
$tit = wp_title( '' , false );
?>
	
	<!--/ここからブログ記事-->
	<section class="secBox">
		<h1 class="baseTitle">
			<?php the_title(); ?>
		</h1>
		<p>
			<time datetime="<?php the_time('Y-m-d'); ?>" pubdate="pubdate">
				<?php the_time('Y年m月d日'); ?>
			</time>
		</p>


<div class="b-thumbnail">
<?php
  if(has_post_thumbnail()):
    the_post_thumbnail();
  else:
?>
<?php endif; ?>
</div>
		<?php the_content(); ?>
		
    <section class="author">
    <span class="author_info">監修者情報</span>
      <img src="https://www.ike-sunshine.co.jp/img/top/im_profile01.jpg" alt="院長の画像">
      
    <div class="description">
	 <p>医療法人社団　栄真会</p>
    <p><span class="clinic">池袋サンシャイン美容外科</span></p>
    <p class="doctor"><span>院長</span><a href="https://www.ike-sunshine.co.jp/greetings/" rel="author">    鈴木 栄樹</a></p>
    
    <div class="overview">
      <p class="member">日本美容外科学会正会員・認定医<br>
      日本美容外科医師会正会員<br>
      日本抗加齢医学正会員</p>
      <p class="history">95年　聖マリアンナ医科大学卒業<br>
      03-06年　医療法人博済会鈴木病院 美容外科外来開設<br>
      06年　池袋サンシャイン美容外科開設<br></p>
    </div>
    </div>
    </section>
		
		<ul id="paging-detail">
			<li>
				<?php if(get_adjacent_post(false, '', true)) {?>
				<?php previous_post_link('%link', '＜＜ 前の記事へ', true); ?>
				<?php }else{ ?>
				<?php } ?>
			</li>
			<li>
				<?php if(get_adjacent_post(false, '', false)) {?>
				<?php next_post_link('%link', '次の記事へ ＞＞', true); ?>
				<?php }else{  ?>
				<?php } ?>
			</li>
		</ul>
	</section>
	<?php endwhile; endif; ?>
	</main>
</div>
<!--/#mainContents--> 
<!--/ここまでコンテンツ-->

<div class="breadcrumbs">
	<ol class="clrfix">
		<li><a href="/">HOME</a></li>
		<!-- 
		<?php if ( $GLOBALS['blog_id'] == 2 ) { ?>
		<li><a href="<?php bloginfo('url'); ?>">
			<?php bloginfo('name') ?>
			</a></li>

		<li>
			<?php $category_link = get_category_link( $cat ); ?>
			<?php $cat_info = get_category( $cat ); ?>
			<a href="<?php echo esc_url( $category_link ); ?>"><?php echo esc_html( $cat_info->name ); ?></a>
		</li>
		<?php } else { ?>
		 -->
		<li>
			<?php $category_link = get_category_link( $cat ); ?>
			<?php $cat_info = get_category( $cat ); ?>
			<a href="<?php echo esc_url( $category_link ); ?>"><?php echo esc_html( $cat_info->name ); ?></a> </li>
		<?php } ?>
		<?php query_posts($query_string . "posts_per_page=1"); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<li>
			<?php the_title(); ?>
		</li>
		<!-- <?php endwhile; endif; ?> -->
	</ol>
</div>
<?php include (STYLESHEETPATH . '/sidecontact.php'); ?>
<?php get_footer(); ?>