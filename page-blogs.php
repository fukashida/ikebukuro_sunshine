<?php get_header(); ?>

<div class="breadcrumbs">
	<ol class="clrfix">
		<li><a href="/">HOME</a></li>
		<li>
			<?php
			// カテゴリの取得
			$current_category = get_queried_object();
			$category_name = $current_category ? $current_category->name : 'ブログ';
			echo esc_html($category_name);
			?>
		</li>
	</ol>
</div>

<!--/ここからコンテンツ-->
<div id="mainContents">
<main>

<div id="pageTitle" class="<?php echo get_page($page_id)->post_name; ?>">
<h1><?php the_title(); ?></h1>
<?php if(get_post_meta( $post->ID, 'titlesub', true )): ?>
<p><?php echo get_post_meta($post->ID,'titlesub', true);?></p>
<?php endif; ?>
</div>

	<?php
	// 「ブログ」カテゴリーの取得
	$blog_cat = get_category_by_slug('blogs'); 
	$news_cat = get_category_by_slug('news'); // 「お知らせ」カテゴリーの取得（除外用）

	// カテゴリーID取得（取得できなかった場合の対策）
	$blog_cat_id = $blog_cat ? $blog_cat->term_id : 0;
	$news_cat_id = $news_cat ? $news_cat->term_id : 0;

	// 記事取得条件
	$args = array(
		'posts_per_page' => 10, 
		'category__in' => array($blog_cat_id), // 「ブログ」カテゴリーのみ取得
		'category__not_in' => array($news_cat_id), // 「お知らせ」を除外
		'paged' => get_query_var('paged'), 
		'post_status' => 'publish' // 公開済みの投稿のみ取得
	);

	$myposts = new WP_Query($args);

	if ($myposts->have_posts()) :
		while ($myposts->have_posts()) : $myposts->the_post();
	?>

	<!-- 記事ループ -->
	<section class="secBox">
		<div class="archives-box">
			<a href="<?php the_permalink(); ?>">
				<div class="archives-box-inner clearfix">
					<div class="archives-left">
						<?php
						if (has_post_thumbnail()) {
							the_post_thumbnail('thumbnail');
						} else {
							echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/top/no-image.jpg">';
						}
						?>
					</div>
					<div class="archives-right">
						<div class="archives-title"><?php the_title(); ?></div>
						<div class="archives-meta">
							<span class="archives-update"><?php the_time('Y年m月d日更新'); ?></span>
							<span class="archives-cate">
								<?php
								$cats = get_the_category();
								$current_cat = $cats ? $cats[0] : null;
								if ($current_cat) {
									echo esc_html($current_cat->cat_name);
								}
								?>
							</span>
						</div>
						<div class="archives-description"><?php echo esc_html(mb_substr(strip_tags(get_the_content()), 0, 50)) . '...'; ?></div>
						<div class="archives-detail">詳しく見る</div>
					</div>
				</div>
			</a>
		</div>
	</section>

	<?php endwhile; else : ?>
		<p>記事がありません。</p>
	<?php endif; ?>

	<?php wp_reset_postdata(); ?>

	<!--/ページング-->
	<div class="paging">
		<div class="pagingWrap">
			<?php if (function_exists("pagination")) {
				pagination($myposts->max_num_pages);
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
			<?php echo esc_html($category_name); ?>
		</li>
	</ol>
</div>

<?php include (STYLESHEETPATH . '/sidecontact.php'); ?>
<?php get_footer(); ?>
