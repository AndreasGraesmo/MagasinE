<?php
/**
* Template for displaying videorep custom post type entries
*/
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   
    <header class="entry-header">
        
        <h1 class="entry-title"><?php the_title(); ?></h1>
        
    </header>
        
    <div class=ingress>    
    
    <h5><?php the_field('tekst1'); ?></h5>
        
    </div>
    
    <div class=byline>
            
    <p><?php the_field('byline'); ?></p>        
              
    </div>
    
    
    <div id="video">
    
    <?php the_field('video'); ?>
        
    </div>
            
    <div class="relevantarticles">

        <div id="r-artikler-tekst">Flere Relevante Artikler</div>

        <?php if ( function_exists( "get_yuzo_related_posts" ) ) { get_yuzo_related_posts(); } ?>
    
    </div>     
        
</article>
        