<?php get_header(); ?>




<!-- articles ----------------->

       <section>
           <h2 class="sub-title">Latest</h2>
           <div class="articles">
           <?php while(have_posts()): the_post(); ?>

           <div class="img-box">
               <div class="article-div">
               <?php if(has_post_thumbnail()): ?>
               <img class="article-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
               <?php else: ?>
               <img src="http://placehold.jp/300×300.png?text=No Image" alt="">
　　　　　　　　　<?php endif; ?>
               <span></span>
               <span class="text">
                   <?php the_excerpt(); ?>
               </span>
               <a href="<?php the_permalink(); ?>">Read More</a>
           </div>
           </div>
<?php endwhile; ?>

<?php previous_post_link('%link','前へ'); ?>
<?php next_post_link('%link','次へ'); ?>

</section>


<!-- article end ---------------------->

   <?php get_template_part('contact'); ?>

   <?php get_footer(); ?>