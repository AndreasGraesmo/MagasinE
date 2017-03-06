<?php

get_header();
?>

<main>

<?php 
$first = true;
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <?php if ( $first ): ?>
    <div class="featured">
        <article class="post">

            <?php the_post_thumbnail('large-thumbnail'); ?>

            <p class="post-info"><?php the_category( ' ' ); ?> <?php the_time('d M, Y'); ?></p>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


            <?php the_excerpt(); ?>


        </article>
    </div>

    <?php $first = false; ?>
    <?php $i = 0; ?>
    <div class="all-posts">
    <?php else: ?>
        
    <?php if ( $i % 2 ==  0) : ?>    
    <div class="post-list">
    <?php endif; ?>

        <article class="under-post">

            <?php the_post_thumbnail('small-thumbnail'); ?>

            <p class="post-info"><?php the_category( ' ' ); ?> <?php the_time('d M, Y'); ?></p>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


            <?php the_excerpt(); ?>


        </article>
    
    <?php if ( $i % 2 != 0 ) : ?>
    </div>
    <?php endif; $i++; ?>

    <?php endif; ?>

    <?php endwhile;
        
    else :
        echo '<p>No content found</p>';
    
    endif;
?>
    </div>
  </main>

<?php
    
get_footer();

?>