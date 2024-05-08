<?php
/**
 * Partial template for opening times in a Single Centre
 */
?>
<!-- Start LSL Opening times -->
<div class="col-12 timeInfosBlock timeInfos">
    <h4>
        <?php esc_html_e( 'Horario de apertura', 'lsl-albia' ); ?>
    </h4>

    <ul>
        <li class="timeInfosEl">

            <?php do_action( 'lsl_ots_content', $ots, $post ); ?>

            <div class="showDays" id="showDaysButton">
            </div>
        </li>
    </ul>
</div>
<!-- End LSL Opening times -->
