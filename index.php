<?php get_template_part('templates/page', 'header'); ?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <?php if (!have_posts()) : ?>
        <div class="alert alert-warning">
          <?php _e('Sorry, no results were found.', 'sage'); ?>
        </div>
        <?php get_search_form(); ?>
      <?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>
      </div>
    </div>
</div>
<section class="blog-sidebar-wrap">
  <div class="container">
    <div class="row">
      <?php dynamic_sidebar('blog-sidebar'); ?>
    </div>
  </div>
</section>
