<?php get_header(); ?>

<section>

<?php if(have_posts()):while(have_posts()):the_post(); ?>
<h2><a><?php the_title(); ?></a></h2>

<?php if(has_post_thumbnail()): ?>
<img src="<?php the_post_thumbnail_url(); ?>" alt="サムネイル">
<?php else: ?>
<img src="http://placehold.jp/300×300.png?text=No Image" alt="">
<?php endif; ?>

<p><?php the_content(); ?></p>

<?php endwhile; endif; ?>

<?php previous_post_link('%link','前へ'); ?>
<?php next_post_link('%link','次へ'); ?>

</section>

<?php get_footer(); ?>