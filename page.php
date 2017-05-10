<?php
get_header(); ?>
<div class="page-wrapper">
<div class="postwrap">
<?php
if (have_posts()) :
    while (have_posts()) : the_post();?>

    <article class="post">
        
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        
        <?php the_content(); ?>
        
    </article>

<?php

    endwhile;
        
    else :
        echo '<p>No content found</p>';
    
    endif;
?>
</div>
    
    <!--- Ads divs -->
    <div class="ads">
        <?php 
        
        include "longad.php";
        include "smallad.php";
        
        ?>
    </div>
    <!--- /Ads divs -->
    
</div>
<?php get_footer();?>