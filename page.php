<?php
get_header(); ?>
<div class="page-wrapper">
<div class="postwrap">
<?php
if (have_posts()) :
    while (have_posts()) : the_post();?>

    <article class="post" id="page-post">
        
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <?php the_content(); ?>
        
    </article>

<?php

    endwhile;
        
    else :
        echo '<p>No content found</p>';
    
    endif;
?>
</div>
    
</div>
<?php get_footer();?>