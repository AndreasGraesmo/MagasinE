<?php
/* Single Post Template: Foto Reportasje Slidehsow
Description: fotoreportasje med slideshow på bunn
*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();?>

    <article class="post" id="post-single1">
        
        <div class="heroimage">
            <?php the_post_thumbnail('large-thumbnail'); ?>
      <div class="herotext">
	<h2><?php the_title(); ?></h2>
	<p><?php the_field('ingress'); ?></p>
</div>
</div>
        
        
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
                <p class="post-info"><?php the_category( ' ' ); ?> &nbsp;<?php the_time('d M, Y'); ?> <br>
                </p>
                
               <div class="mobtitle"> <h2><?php the_title(); ?></h2></div>

                

<div class="mobingress">
   <h5><?php the_field('ingress'); ?></h5>
                </div>
                
                <div class="byline">
        
        <?php the_field('byline'); ?>
            
    </div>
                <div class="content">    
                    <?php the_content(); ?> 
                    <?php the_field('tekst1'); ?>
                </div>

            </div>
        
        </div> 
        
        <?php the_field("slideshow"); ?>
</article>
    

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