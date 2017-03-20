<?php
/* Single Post Template: Foto Reportasje
Description: fotoreportasje uten showcase med store bilder.
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

                <h2><?php the_title(); ?></h2>
                
                <div class="byline">
        
                <?php the_field('byline'); ?>
            
                </div>


                <div class="content">    
                <!---    <?php the_content(); ?> --->
                    <?php the_field('tekst1'); ?>
                </div>

            </div>
        
        </div>    
        
    </article>

</div> <!--- Container slutt ---->

<?php if(get_field('stortbilde') ): ?>
    
<div class="stortbilde-wrapper">

    <img src="<?php the_field('stortbilde'); ?>" class="fullscreenbilde" />
    
</div>

<?php

    endif;

    endwhile;
        
    else :
        echo '<p>No content found</p>';
    
    endif;
?>

<div class="container"> <!--- Container åpne igjen ---->
    
    <div class="sidebarcontent-wrapper">
    
        <div class="sidebar-wrapper">

                <?php if(get_field('sidebilde3') ): ?>

                <div class="side-bar"><img src="<?php the_field('sidebilde3'); ?>" class="sidebilde"/></div>
                
                <?php endif; ?>

                <div class="side-bar"><div class="sitat"><?php the_field('sidesitat2'); ?></div></div>

                <?php if(get_field('sidebilde4') ): ?>

                <div class="side-bar"><img src="<?php the_field('sidebilde4'); ?>" class="sidebilde"/></div>
                
                <?php endif; ?>

        </div>

        <div class="content-wrapper">

            <div class="content">    
            <!---    <?php the_content(); ?> --->
                    <?php the_field('tekst2'); ?>
            </div>

        </div>
    
    </div>    
    
</div> <!--- Container slutt ---->

<?php if(get_field('stortbilde2') ): ?>

<div class="stortbilde-wrapper">

    <img src="<?php the_field('stortbilde2'); ?>" class="fullscreenbilde" />

</div>
    
<?php endif; ?>

<div class="container"> <!--- Container åpne igjen ---->
    
    <div class="sidebarcontent-wrapper">
    
        <div class="sidebar-wrapper">

                <?php if(get_field('sidebilde5') ): ?>

                <div class="side-bar"><img src="<?php the_field('sidebilde5'); ?>" class="sidebilde"/></div>
                
                <?php endif; ?>

                <div class="side-bar"><div class="sitat"><?php the_field('sidesitat3'); ?></div></div>

                <?php if(get_field('sidebilde6') ): ?>

                <div class="side-bar"><img src="<?php the_field('sidebilde6'); ?>" class="sidebilde"/></div>
                
                <?php endif; ?>

        </div>

        <div class="content-wrapper">

            <div class="content">    
            <!---    <?php the_content(); ?> --->
                    <?php the_field('tekst3'); ?>
            </div>

        </div>
    
    </div>
    
</div> <!--- Container slutt ---->

<?php if(get_field('stortbilde3') ): ?>
          
    <div class="stortbilde-wrapper">

        <img src="<?php the_field('stortbilde3'); ?>" class="fullscreenbilde" />
        
    </div>

<?php endif; ?>

<div class="container"> <!--- Container åpne igjen ---->
    
    <div class="sidebarcontent-wrapper">
        
        <div class="sidebar-wrapper">

                <?php if(get_field('sidebilde7') ): ?>

                <div class="side-bar"><img src="<?php the_field('sidebilde7'); ?>" class="sidebilde"/></div>
                
                <?php endif; ?>

                <div class="side-bar"><div class="sitat"><?php the_field('sidesitat4'); ?></div></div>

                <?php if(get_field('sidebilde8') ): ?>

                <div class="side-bar"><img src="<?php the_field('sidebilde8'); ?>" class="sidebilde"/></div>
                
                <?php endif; ?>

        </div>
    
        <div class="content-wrapper">

            <div class="content">    
            <!---    <?php the_content(); ?> --->
                    <?php the_field('tekst4'); ?>
            </div>

        </div>
        
    </div>

    <div class="relevantarticles">

        <div id="r-artikler-tekst">Flere Relevante Artikler</div>

        <?php if ( function_exists( "get_yuzo_related_posts" ) ) { get_yuzo_related_posts(); } ?>
    
    </div>

<?php

get_footer();

?>