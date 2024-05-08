<?php
/**
 * Facilities module template
 */
?>
<div class="col-12 col-md-10 iconsBox facilities-module">
    <div class="row">
        <?php $row = 0; ?>
        <?php foreach ( $facilities as $key => $facility ): ?>

            <div class="col-3 box text-center">
                <img src="<?php echo esc_url( get_term_meta( $facility->term_id, 'lsl_facility_icon', true) ); ?>" alt="Facility icon">
                <p>
                    <?php echo esc_html( $facility->name ); ?>
                </p>
            </div>

            <?php if ( $key === 2 + 3 * $row ) : ?>
                <div class="w-100"></div>
                <?php $row = $row + 1; ?>
            <?php endif; ?>

        <?php endforeach; ?>
    </div>
</div>
