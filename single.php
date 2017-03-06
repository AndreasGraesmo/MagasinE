<?php 

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post">
        
        <?php the_post_thumbnail('large-thumbnail'); ?>
        
        <p class="post-info"><?php the_category( ' ' ); ?> <?php the_time('d M, Y'); ?></p>
        
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <?php the_content(); ?>
        
    </article>

    <?php endwhile;
        
    else :
        echo '<p>No content found</p>';
    
    endif; ?>

<div class="relevantarticles">

    <div id="r-artikler-tekst">Flere Relevante Artikler</div>

    <?php if ( function_exists( "get_yuzo_related_posts" ) ) { get_yuzo_related_posts(); } ?>
    
</div>

<?php

get_footer();

?>