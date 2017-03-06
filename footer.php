        <footer class="site-footer">

            <nav class="site-nav">

                <?php

                    $args = array(
                        'theme_location' => 'footer'
                    );

                ?>

                <?php wp_nav_menu(  $args ); ?>

            </nav>

        </footer>

        <div id="credz">Made by Borderless UB &copy; <?php echo date('Y'); ?></div>

    </div> <!-- container -->

<?php wp_footer(); ?>

</body>


</html>