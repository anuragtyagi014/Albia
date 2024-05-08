<?php
/**
 * Template for showing days
 */
?>
<div class="timeInfosElTitle"><?php echo esc_html( $season_output ); ?></div>

<ul class="timeInfosElContent">

    <?php foreach( $days_times_output as $row ): ?>

        <?php if( 
            strtolower( $row['day'] ) === strtolower( $day_name_output ) ||
            strtolower( $row['day'] ) === 'lunes - domingo'
        ): ?>
            <li class="timeInfosDay"><?php echo esc_html( $row['day'] ); ?><span class="inlineEnd"><?php echo esc_html( $row['times'] ); ?></span>
            </li>
        <?php else: ?>
            <li class="timeInfosDay notActualDay notActualDayHidden"><?php echo esc_html( $row['day'] ); ?><span class="inlineEnd"><?php echo esc_html( $row['times'] ); ?></span>
            </li>
        <?php endif ?>

    <?php endforeach; ?>

</ul>
