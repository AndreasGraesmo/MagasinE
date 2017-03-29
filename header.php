<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <script type="text/javascript">
    
    function mobshow() {
        $("#submenu").toggleClass("mobmenushow");
    }
        </script>
    
    

</head>
    
<body <?php body_class(); ?>>
    
    <div id="logomob">
            
            <figure id="logomobid"><a href="<?php echo home_url(); ?>" title="Til Forsiden"></a></figure>
                
        </div>
    
    <div id="topheader">
           
        <!----HAMBURGER MENU---->
            
        <a href="javascript:void(0);" onclick="mobshow()" >&#9776;</a>
        
            
        <!----HAMBURGER MENU---->    
        
    </div>
    
        <!----SUBMENU------>
        
        <header id="submenu">
                
                <!----SUBMENU SEARCH------>
            
            <div id="mob-search">
                
                <?php get_search_form(); ?>
                
            </div>
                
                <!-----END OF SUBMENU SEARCH------>
            
            <nav class="mobile-nav">
            
                <?php

                        $args = array(
                            'theme_location' => 'primary'
                        );

                ?>

                <?php wp_nav_menu(  $args ); ?>
              
            </nav>
                
        </header>
    
    <div class="container">
    
        <!-- site-header -->
        <header class="site-header">
            
            <!-- hd-search -->
            <div class="hd-search">
            
                <?php get_search_form(); ?>
            
            </div> <!-- /hd-search -->
            
            <div id="logobigdiv">
            
                <figure id="logobig"><a href="<?php echo home_url(); ?>" title="Til Forsiden"></a></figure>
                
            </div>
                
                <!--<h5><?php bloginfo('description'); ?></h5> -->
            
            <nav class="site-nav">
            
                <?php

                    $args = array(
                        'theme_location' => 'primary'
                    );

                ?>

                <?php wp_nav_menu(  $args ); ?>
            
            </nav>

        </header><!-- /site-header -->