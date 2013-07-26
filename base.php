<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
  <div class="page-container">
      <!--[if lt IE 7]>
        <p class="chromeframe">Käytät <strong>vanhentunutta</strong> selainta. Ole hyvä ja <a href="http://browsehappy.com/">päivitä selaimesi</a> tai <a href="http://www.google.com/chromeframe/?redirect=true">käytä Google Chrome Frame</a> parantaaksesi käyttökokemuksiasi.</p>
      <![endif]-->
      
    <div class="header-bg-container collapse">
    </div>   
      
      
  <?php
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="container main-container">
      <!-- header-row -->
      <div class="row">
      </div>
      <!-- /header-row -->
      <!-- content-row -->
      <div class="row content-container">
        <div class="span12 no-margin no-padding">
          <!-- main-content-row -->
          <div class="row">
            <!-- blog -->
            <div class="blog-container <?php echo roots_main_class(); ?>">
                <?php include roots_template_path(); ?>
              <div class="spacer">
              </div>
            </div>
            <!-- /blog -->
            <!-- orange-placeholder -->
            <div class="span3 orange-span hidden-phone">
            </div>
          </div>
          <!-- /main-content-row -->
        </div>
      </div>
      <!-- /content-row -->
    </div><!-- /container -->
    <?php get_template_part('templates/footer'); ?>
    </div>
</body>
</html>
