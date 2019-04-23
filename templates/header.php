<header>
      <div id="fixed-nav" class="">
  <div class="container">
    <div class="row">
      <div class="col-sm-5 col-xs-4">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/dist/images/logo.png" alt="BarLogic Logo" class="logo" /></a>
      </div>
      <div class="col-sm-7 col-xs-8">
      <nav class="navbar" role="navigation">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <?php /* Primary navigation */
            wp_nav_menu( [
              'menu' => 'primary_navigation',
              'depth' => 2,
              'container' => false,
              'menu_class' => 'nav navbar',
              'walker' => new wp_bootstrap_navwalker()]
            );
          ?>
        </div>
      </nav>
            </div>

          </div>
    </div>

      </div>
      <div class="header-section">
        <?php if ( is_active_sidebar( 'header-contact' ) ) { ?>
          <div class="copy-wrap">
		<?php dynamic_sidebar( 'header-contact' ); ?>
	</div>
<?php } ?>
      </div>

      <div class="bar-top">
        <div class="bubble-1">      </div>
        <div class="bubble-2">      </div>
        <div class="glass-one"></div>
        <div class="ollie-1"></div>
        <div class="glass-two"></div>
      </div>
</header>
