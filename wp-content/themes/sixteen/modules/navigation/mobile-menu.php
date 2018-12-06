<div id="mobile-nav">
	<a id="#menu" class="menu-link">&#9776;</a>
	<nav id="menu" class="panel" role="navigation">
    <?php
    // Get the Appropriate Walker First.
    wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    
</nav><!-- #site-navigation -->
</div>