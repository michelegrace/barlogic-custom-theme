<div id="about" class="white-bg">
  <div class="container">
    <?php the_content(); ?>
  </div>
</div>
  <div class="cta wood-bg">
    <div class="container">
      <div class="col-lg-12 col-lg-offset-0 col-sm-10 col-sm-offset-1">
        <?php dynamic_sidebar( 'cta-one' ); ?>
      </div>

    </div>

</div>
<?php if (get_field('what-we-can-do')):  ?>
  <div id="services" class="white-bg">
    <div class="container">
      <?php echo get_field('what-we-can-do'); ?>
    </div>

</div>
<?php endif; ?>
  <div class="cta green-bg">
    <div class="container">
      <div class="col-lg-12 col-lg-offset-0 col-sm-10 col-sm-offset-1">
        <?php dynamic_sidebar( 'cta-two' ); ?>
      </div>

    </div>

</div>
