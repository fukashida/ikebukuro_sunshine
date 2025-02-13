<?php get_header(); ?>

<div class="breadcrumbs">
	<ol class="clrfix">
		<li><a href="/">HOME</a></li>
		<li>
			ブログ
		</li>
	</ol>
</div>

<!--/ここからコンテンツ-->
<div id="mainContents">
<main>
	<div id="pageTitle" class="blogs">
		<h2>ブログ</h2>
	</div>
	<?php
	    global $post;
	    $cat_now = get_the_category();
	    $cat_now = get_queried_object();
	    $cat_name = $cat_now->cat_name;
	    $cat_id = $cat_now->cat_ID;
	    $args = array( 'posts_per_page' => 10, 'cat' => $cat_id, 'paged' => get_query_var( 'paged' ), 'category__not_in' => array( 1 ),);
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
					echo '<img src="/img/top/no-image.jpg">';
				}
				?>
				</div>
				<div class="archives-right">
					<div class="archives-title"><?php the_title(); ?></div>
					<div class="archives-meta">
						<span class="archives-update"><?php the_time('y年m月d日更新'); ?></span>
						<span class="archives-cate">
							<!-- <?php $cat = get_the_category(); ?>
							<?php $cat = $cat[0]; ?>
							<?php echo get_cat_name($cat->term_id); ?>
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

<div class="breadcrumbs">
	<ol class="clrfix">
		<li><a href="/">HOME</a></li>
		<li>
			ブログ
		</li>
	</ol>
</div>
<?php include (STYLESHEETPATH . '/sidecontact.php'); ?>
<?php get_footer(); ?>
