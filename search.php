<?php get_header(); ?>

<div class="breadcrumbs">
<ol class="clrfix">
<li><a href="/">HOME</a></li>
<li><?php echo wp_title(''); ?></li>
</ol>
</div>

<!--/ここからコンテンツ-->
<div id="mainContents">
<main>
<div id="pageTitle">
<h2>検索結果</h2>
<p>『<?php echo get_search_query(); ?>』での検索結果　<?php echo $wp_query->found_posts; ?>件</p>
</div>

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<section class="secBox">
    <h2 class="baseTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
</section>
<?php endwhile; ?>
<?php else : ?>
<section class="secBox">
<h2 class="baseTitle">記事がありませんでした</h2>
    <p>検索条件にヒットした記事がありませんでした。</p>
</section>
<?php endif; ?>

<!--/ページング-->
<?php //if (function_exists("pagination")) {
    //pagination($additional_loop->max_num_pages);
//} ?>

</main>
</div>
<!--/#mainContents-->
<!--/ここまでコンテンツ-->


<?php get_sidebar(); ?>


<div class="breadcrumbs">
<ol class="clrfix">
<li><a href="/">HOME</a></li>
<li><?php echo wp_title(''); ?></li>
</ol>
</div>

<?php include (STYLESHEETPATH . '/sidecontact.php'); ?>

<?php get_footer(); ?>