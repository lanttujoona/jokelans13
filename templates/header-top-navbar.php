<header id="banner" class="navbar navbar-static-top" role="banner">
    <div class="navbar-inner">
        <div class="navbar-container">
 
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <nav id="nav-main" class="nav-collapse" role="navigation">
                <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
                    endif;
                ?>
            </nav>
        </div>
    </div>
</header>