<?php
/**
 * Template file for breadcrumbs of a single-centre page
 */
?>
<div class="row">
    <ul class="col-12">
        <li><a href="<?php echo esc_url( $breadcrumbs->external_home ); ?>"><img src="<?php echo esc_url( get_bloginfo( 'stylesheet_directory' ) . '/img/icons/home-2.svg' ); ?>" alt="homeButton" class="internNavImg"></a></li>
        <li><a href="<?php echo esc_url( $breadcrumbs->store_loc_home ); ?>"><?php esc_html_e( 'Localizar un centro', 'lsl-albia' ); ?></a></li>
        <?php foreach( $breadcrumbs->crumbs as $index => $crumb ): ?>
            <li>
                <a href="<?php echo esc_url( $crumb['link'] ); ?>"><?php echo esc_html( $crumb['name'] ); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
