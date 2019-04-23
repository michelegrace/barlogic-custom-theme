<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <div class="page-header" style="background-image: url('<?php echo $image[0]; ?>')">

            </div>
<?php endif; ?>
