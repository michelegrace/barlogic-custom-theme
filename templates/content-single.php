<?php while (have_posts()) : the_post(); ?>
  <div class="container">
    <div class="col-md-10 col-md-offset-1 col-sm-12">

  <article <?php post_class(); ?>>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  </article>
</div>
</div>
<section id="comment-section" class="grey-bg">
  <div class="container">
    <div class="col-sm-12">
          <?php comments_template('/templates/comments.php'); ?>
    </div>
  </div>
</section>
<?php endwhile; ?>
