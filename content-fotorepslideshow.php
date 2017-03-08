<?php
/* Single Post Template: Foto Reportasje Slidehsow
Description: fotoreportasje med slideshow på bunn
*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post" id="post-single">
        
        <?php the_post_thumbnail('large-thumbnail'); ?>
        
        <div class="sidebarcontent-wrapper">
        
            <div class="sidebar-wrapper">
                
                <?php if(get_field('sidebilde1') ): ?>

                <div class="side-bar"><img src="<?php the_field('sidebilde1'); ?>" class="sidebilde"/></div>
                
                <?php endif; ?>

                <div class="side-bar"><div class="sitat"><?php the_field('sidesitat1'); ?></div></div>

                <?php if(get_field('sidebilde2') ): ?>

                <div class="side-bar"><img src="<?php the_field('sidebilde2'); ?>" class="sidebilde"/></div>
                
                <?php endif; ?>

            </div>

            <div id="single-fotorepotasje" class="content-wrapper">
                <p class="post-info"><?php the_category( ' ' ); ?> <?php the_time('d M, Y'); ?> <br>
                </p>

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


                <div class="content">    
                <!---    <?php the_content(); ?> --->
                    <?php the_field('tekst1'); ?>
                </div>

            </div>
        
        </div>    
        
    </article>

    <div class="byline">
        
        <?php the_field('byline'); ?>
            
    </div>

    <div class="relevantarticles">

        <div id="r-artikler-tekst">Flere Relevante Artikler</div>

        <?php if ( function_exists( "get_yuzo_related_posts" ) ) { get_yuzo_related_posts(); } ?>
    
    </div>

<?php

    endwhile;
        
    else :
        echo '<p>No content found</p>';
    
    endif;
?>

<?php

get_footer();

?>