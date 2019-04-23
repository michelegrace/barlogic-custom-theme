<section id="contact" class="above-footer">
  <div class="container">
    <?php dynamic_sidebar('footer-welcome'); ?>
    <div class="row">
      <div class="col-sm-7">
        <?php echo gravity_form(1, false, false); ?>
      </div>
      <div class="col-sm-5">
        <?php dynamic_sidebar('footer-sidebar'); ?>
      </div>
    </div>
  </div>
</section>
<footer class="content-info wood-bg">
  <div class="copy">
    <p>&copy; <?php echo date('Y'); ?> BarLogic </p>
  </div>
</footer>
