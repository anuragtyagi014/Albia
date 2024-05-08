<?php
/**
 * Gallery img element
 */
?>
<div class="carousel-item <?php echo esc_attr( $active ); ?>">
    <img class="d-block w-100" src="<?php echo esc_url( $gallery_img ); ?>" alt="<?php echo esc_html( $post->post_title ); ?>">
</div>
