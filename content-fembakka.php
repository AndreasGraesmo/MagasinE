<?php
/**
* Template for displaying fembakka custom post type entries
*/
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        
        <h1 class="entry-title"><?php the_title(); ?></h1>
        
    </header>
    
    

<div class="ingress">
   <h4><?php the_field('ingress'); ?></h4>
                </div>
    
    <div class="byline">
        
        <?php the_field('byline'); ?>
            
    </div>
                
        
        <div id=fotowrap>
            
         <div class="left-entry-content" >  
              
             <div class="image">
    <?php if( get_field('image1') ): ?>

	   <img src="<?php the_field('image1'); ?>"  />

             <?php endif; ?>
                  
             </div>
            
             <div class="tekst">
             
            <h3><?php the_field('navn1'); ?></h3>
            
             <p><?php the_field('tekst1'); ?></p>
                 
                 </div>
             
            </div>
            
<div class="right-entry-content"> 
            <div class="image">
                <?php if( get_field('image2') ): ?>

	   <img src="<?php the_field('image2'); ?>"  />

             <?php endif; ?>
                
    </div>
    
            <h3><?php the_field('navn2'); ?></h3>
            
             <p><?php the_field('tekst2'); ?></p>
                
            </div> 
            
    <div class="left-entry-content" >  
              <div class="image">
    <?php if( get_field('image3') ): ?>

	   <img src="<?php the_field('image3'); ?>"  />

             <?php endif; ?>
                  
             </div>
             <div class="tekst">
             <h3><?php the_field('navn3'); ?></h3>
            
             <p><?php the_field('tekst3'); ?></p>
                 
                 </div>
             
            </div>
            
<div class="right-entry-content"> 
            <div class="image">
                <?php if( get_field('image4') ): ?>

	   <img src="<?php the_field('image4'); ?>"  />

             <?php endif; ?>
                
    </div>
    
            <h3><?php the_field('navn4'); ?></h3>
            
             <p><?php the_field('tekst4'); ?></p>
                
            </div> 
    
    <div class="left-entry-content" >  
              <div class="image">
    <?php if( get_field('image5') ): ?>

	   <img src="<?php the_field('image5'); ?>"  />

             <?php endif; ?>
                  
             </div>
             <div class="tekst">
             <h3><?php the_field('navn5'); ?></h3>
            
             <p><?php the_field('tekst5'); ?></p>
                 
                 </div>
             
            </div>
    </div>
            
     <div class="relevantarticles">

        <div id="r-artikler-tekst">Flere Relevante Artikler</div>

        <?php if ( function_exists( "get_yuzo_related_posts" ) ) { get_yuzo_related_posts(); } ?>
    
    </div>     
        
</article>
        
    