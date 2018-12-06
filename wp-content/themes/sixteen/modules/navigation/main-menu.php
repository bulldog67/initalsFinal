<div id="slickmenu"></div>

<div class="nav-container container">
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php // Get the Appropriate Walker First.
        $walker = '';
        if ( has_nav_menu(  'primary' ) && !get_theme_mod('sixteen_disable_nav_desc',true) ) :
            $walker = new Sixteen_Menu_With_Description;
        elseif (!has_nav_menu('primary') ) :
            $walker = '';
        else :
            $walker = new Sixteen_Menu_With_Icon;
        endif;
        //Display the Menu.
        wp_nav_menu( array( 'theme_location' => 'primary', 'walker' => $walker ) ); ?>
    </nav><!-- #site-navigation -->
</div>