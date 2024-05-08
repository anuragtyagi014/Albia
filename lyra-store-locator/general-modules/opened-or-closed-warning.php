<?php 
/**
 * Opened/closed warning
 */
 ?>
<div class="schedule-warning" style="height: 30px;">
    <div class="closed<?php echo ( empty($minutes_to_close) && empty($minutes_to_open) && $status === 0 ) ? ' active-warning' : ' inactive-warning' ; ?>">
        <?php esc_html_e( 'Cerrado', 'lsl-albia' ); ?>
    </div>

    <div class="opened<?php echo ( empty($minutes_to_close) && empty($minutes_to_open) && $status === 1 ) ? ' active-warning' : ' inactive-warning' ; ?>">
        <?php esc_html_e('Abierto', 'lsl-albia'); ?>
    </div>

    <div class="soon<?php echo ( !empty($minutes_to_close) ) ? ' active-warning' : ' inactive-warning' ; ?>">
        <?php esc_html_e('Cierra en ', 'lsl-albia'); ?>
        <span class="mins-to-close"><?php echo ( !empty($minutes_to_close) ) ? esc_html( $minutes_to_close ) : '' ; ?></span>
        <?php esc_html_e('min', 'lsl-albia'); ?>
    </div>

    <div class="soon<?php echo ( !empty($minutes_to_open) ) ? ' active-warning' : ' inactive-warning' ; ?>">
        <?php esc_html_e('Abre en', 'lsl-albia'); ?>
        <span class="mins-to-open"><?php echo ( !empty($minutes_to_open) ) ? esc_html( $minutes_to_open ) : '' ; ?></span>
        <?php esc_html_e('min', 'lsl-albia'); ?>
    </div>

    <div class="check-schedule<?php echo ( $status === -1 ) ? ' active-warning' : ' inactive-warning'; ?>">
        <?php esc_html_e('Ver horarios', 'lsl-albia'); ?>
    </div>
</div>
