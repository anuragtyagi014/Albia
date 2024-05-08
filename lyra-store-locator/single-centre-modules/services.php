<?php
/**
 * Services module template
 */
?>
<div class="col-12 iconsBox services-module">
    <div class="row">
        <?php $row = 0; ?>
        <?php foreach ( $services as $key => $service ): ?>

            <div class="col-6 col-lg-4">
                <div class="services-icon">
                    <span class="icon_overlay"></span>
                    <figure class="d-flex align-items-center h-100">
                        <img src="<?php echo esc_attr( get_term_meta( $service->term_id, 'lsl_serv_icon', true) ); ?>" alt="Service icon">
                        <figcaption class="text-center">
                            <?php echo esc_html( $service->description ); ?>
                        </figcaption>
                    </figure>
                </div>

                <p class="services-name text-center">
                    <a href="<?php echo esc_attr( get_term_meta( $service->term_id, 'lsl_serv_link', true) ); ?>"><?php echo esc_html( $service->name ); ?></a>
                </p>
            </div>

        <?php endforeach; ?>
    </div>
</div>
