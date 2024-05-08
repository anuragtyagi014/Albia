<?php
/**
 * Template file for breadcrumbs of a hub page
 */

?>
<div class="row">
    <ul>
        <li><a href="<?php echo esc_url( $breadcrumb->external_home ); ?>"><img src="<?php echo esc_url( get_bloginfo( 'stylesheet_directory' ) . '/img/icons/home-2.svg' ); ?>" alt="homeButton" class="internNavImg"></a></li>
        <li><a href="<?php echo esc_url( $breadcrumb->store_loc_home ); ?>"><?php esc_html_e( 'Localizar un centro', 'lsl-albia' ); ?></a></li>
        <?php foreach( $breadcrumb->crumbs as $index => $crumb ): ?>
            <li>
                <a href="<?php echo esc_url( $crumb['link'] ); ?>"><?php echo esc_html( $crumb['name'] ); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
