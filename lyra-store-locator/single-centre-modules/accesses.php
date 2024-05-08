<?php
/**
 * Accesses element
 */
?>
<ul>
    <?php foreach ( $lsl_accesses as $access ): ?>
        <?php if( !empty( $access['access_value'] ) ): ?>
            <li><?php echo esc_html( $access['access_value'] ); ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
