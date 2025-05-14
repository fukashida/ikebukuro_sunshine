<?php
session_start();
get_header();

$booking = $_SESSION['booking_data'] ?? null;
?>

<div class="breadcrumbs">
<ol class="clrfix">
<li><a href="/">HOME</a></li>
<?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) { ?><li><a href="<?php echo get_page_link( $parid );?>"><?php echo get_page($parid)->post_title; ?></a></li>
<?php } ?>
<li><?php the_title(); ?></li>
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

<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php the_content(); ?>
<?php endwhile;endif; ?>

</main>
</div>
<!--/#mainContents-->
<!--/ここまでコンテンツ-->


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