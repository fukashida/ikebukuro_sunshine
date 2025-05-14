<?php get_header(); ?>


<div class="breadcrumbs">
<ol class="clrfix">
        <li><a href="/">HOME</a></li>
<!-- 
<?php if ( $GLOBALS['blog_id'] == 2 ) { ?>
        <li><a href="<?php bloginfo('url'); ?>">
			<?php bloginfo('name') ?>
			</a></li>
<?php } ?>
 -->

        <li><?php echo wp_title(''); ?>年</li>
</ol>
</div>



<!--/ここからコンテンツ-->
<div id="mainContents">
<main>
			<!-- 
			<?php if ( $GLOBALS['blog_id'] == 2 ) { ?>
			<div id="pageTitle" class="blogs">
			<h2><?php bloginfo('name') ?></h2>
			<?php } else { ?>
			 -->
<div id="pageTitle" class="news">
<?php
	$category = get_the_category();
	$cat_id   = $category[0]->cat_ID;
	$cat_name = $category[0]->cat_name;
	$cat_slug = $category[0]->category_nicename;
?>
			<h1>お知らせ＆ブログ
				<!-- <?php echo $cat_name; ?> -->
				<!-- 
				<?php $cats = get_the_category();
				$cat = $cats[0];
				while($cat->parent) $cat = get_category($cat->parent);
				echo $cat->cat_name; ?>
				-->
			</h1>
			
			<?php } ?>
</div>

<?php
    global $post;
    $cat_now = get_the_category();
    $cat_now = get_queried_object();
    $cat_name = $cat_now->cat_name;
    $cat_id = $cat_now->cat_ID;
    $args = array( 'posts_per_page' => 10, 'cat' => $cat_id, 'year' => wp_title( '' , false ), 'paged' => get_query_var( 'paged' ) );
    $myposts = query_posts( $args );
    foreach( $myposts as $post ) {
    setup_postdata($post);
?>

<section class="secBox">
	<div class="archives-box">
		<a href="<?php the_permalink(); ?>">
			<div class="archives-box-inner clearfix">
				<div class="archives-left"><?php
				// アイキャッチ画像の確認
				if ( has_post_thumbnail()) {
					// 存在する
					the_post_thumbnail('thumbnail');
				}
				else {
					// 存在しない
					echo '/wp-content/themes/ikebukuro_sunshine/img/top/no-image.jpg">';
				}
				?>
				</div>
				<div class="archives-right">
					<div class="archives-title"><?php the_title(); ?></div>
					<div class="archives-meta">
						<span class="archives-update"><?php the_time('y年m月d日更新'); ?></span>
						<span class="archives-cate">
							<!-- 
							<?php $cat = get_the_category(); ?>
							<?php $cat = $cat[0]; ?><?php echo get_cat_name($cat->term_id); ?>
							 -->
							<?php $cats = get_the_category();
							$current_cat = '';
							foreach ( $cats as $cat ) {
							    if ( ! $current_cat || cat_is_ancestor_of( $current_cat, $cat ) ) {
							        $current_cat = $cat;
							    }
							} ?>
							<?php echo $current_cat->cat_name; ?>
						</span>
					</div>
					<div class="archives-description"><?php echo mb_substr(strip_tags($post-> post_content),0,50).'...'; ?></div>
					<div class="archives-detail">詳しく見る</div>
				</div>
			</div>
		</a>
	</div>
</section>
<?php } wp_reset_postdata(); ?>

<!--/ページング-->
<div class="paging">
<div class="pagingWrap">
<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
</div>
</div>

</main>
</div>
<!--/#mainContents-->
<!--/ここまでコンテンツ-->


<?php get_sidebar(); ?>

<div class="breadcrumbs">
<ol class="clrfix">
        <li><a href="/">HOME</a></li>
<!-- 
<?php if ( $GLOBALS['blog_id'] == 2 ) { ?>
        <li><a href="<?php bloginfo('url'); ?>">
			<?php bloginfo('name') ?>
			</a></li>
<?php } ?>
 -->
<li><?php if($year){ ?>
<?php if($monthnum||$year){ echo $year.'年'; ?><?php } ?>
<?php } ?></li>

</ol>
</div>



<?php include (STYLESHEETPATH . '/sidecontact.php'); ?>


<?php get_footer(); ?>