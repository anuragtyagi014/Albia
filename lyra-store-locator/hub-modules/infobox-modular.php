<?php //centre data available in $centre variable
?>
<div class="infoboxModular">
    <div class="infoboxModularContainer">
        <div class="infoboxTxt">
            <h3>
                <?php echo esc_html( $centre->post_title ); ?>
            </h3>
            <Address>
              <?php
              $address ="";
              if( isset( $centre->meta_data->address_1 ) && !empty( $centre->meta_data->address_1 ) ) $address .= sanitize_text_field( $centre->meta_data->address_1 ) . ", ";
              if( isset( $centre->meta_data->postal_code ) && !empty( $centre->meta_data->postal_code ) ) $address .= sanitize_text_field( $centre->meta_data->postal_code ) . ", ";
              if( isset( $centre->meta_data->city ) && !empty( $centre->meta_data->city ) ) $address .= sanitize_text_field( $centre->meta_data->city ) . ", ";
              if( isset( $centre->province ) && !empty( $centre->province ) ) $address .= sanitize_text_field( $centre->province ) . ", ";
              if( isset( $centre->country ) && !empty( $centre->country ) ) $address .= sanitize_text_field( $centre->country );

              echo esc_html( $address );
              ?>
            </Address>
            <a href="<?php if( isset( $centre->link ) ) echo esc_url( $centre->link ); ?>" class="buttonStore">Más detalles</a>
        </div>
        <div class="infoboxImg">
            <!-- Image container ready to be used -->
        </div>
    </div>
</div>
