<?php
/**
* Center modules
*/

defined( 'ABSPATH' ) || exit;

if ( is_array($centre_results) && !empty($centre_results)):?>

<?php foreach( $centre_results as $key => $centre ): ?>

  <?php $id = intval( $centre->ID ); ?>

  <div class="store">
    <a href="<?php echo esc_url( $centre->link ) ?>">
      <div class="storeImgContainer" style="background-image: url(<?php echo esc_url( apply_filters( 'lsl_module_centre_image', $id ) ); ?>)" >
        <div class="overlay">
          <p class="text-center">
            <?php echo sanitize_text_field( $centre->post_title ); ?>
          </p>
        </div>
      </div>
      <div class="storeInfosContainer">
        <address class="storeAddress">
          <?php echo sanitize_text_field( apply_filters( 'lsl_centre_full_address', $id ) ); ?>
        </address>
        <a thref="<?php echo esc_url( 'tel: +34' . sanitize_text_field( $centre->meta_data->phone ) ); ?>" data-phone="<?php echo esc_attr(sanitize_text_field( $centre->meta_data->phone ) ); ?>" class="col-8 align-self-center rounded callButton blog_desktop" attr-location="Home article list" attr-title="<?= get_the_title($id); ?>" id="centerCallButton"></a>
      </div>
    </a>
  </div>

<?php endforeach; ?>

<?php else:
  // variables
  $lsl_centres_close_to_you_ids = get_option( 'lslp_centres_close_to_you_ids' );
  $lsl_centres_close_to_you_ids = explode(',', $lsl_centres_close_to_you_ids );
  $lsl_centres_close_to_you_ids_aux = array();
  $activeHidden = '';
  $lsl_phone = '';

  // Ensure there are a maximux of 3 elements in the array
  if( count( $lsl_centres_close_to_you_ids ) > 3 ){
    $lsl_centres_close_to_you_ids_aux[0] = $lsl_centres_close_to_you_ids[0];
    $lsl_centres_close_to_you_ids_aux[1] = $lsl_centres_close_to_you_ids[1];
    $lsl_centres_close_to_you_ids_aux[2] = $lsl_centres_close_to_you_ids[2];

    $lsl_centres_close_to_you_ids = $lsl_centres_close_to_you_ids_aux;
  }

  unset( $lsl_centres_close_to_you_ids_aux );
  ?>

  <?php foreach( $lsl_centres_close_to_you_ids as $key => $id ): ?>

    <?php
    $id = intval( $id );

    if( $key === 2 ) {
      $activeHidden = 'hiddenContent';
    }
    ?>

    <div class="store <?php echo esc_attr( $activeHidden ); ?>">
        <a href="<?php echo esc_url( get_post_permalink( $id ) ); ?>">
            <div class="storeImgContainer" style="background-image: url(<?php echo esc_url( apply_filters( 'lsl_module_centre_image', $id ) ); ?>)" >
                <div class="overlay">
                <p class="text-center">
                    <?php echo sanitize_text_field( get_the_title( $id ) ); ?>
                </p>
                </div>
            </div>
            <div class="storeInfosContainer">
                <address class="storeAddress">
                    <?php echo sanitize_text_field( apply_filters( 'lsl_centre_full_address', $id ) ); ?>
                </address>
                <?php $lsl_phone = apply_filters( 'lsl_phone', $id ); ?>
                <a thref="<?php echo esc_url( 'tel: +34' . sanitize_text_field( $lsl_phone ) ); ?>" data-phone="<?php echo esc_attr( sanitize_text_field( $lsl_phone ) ); ?>" class="col-8 align-self-center rounded callButton blog_desktop" attr-location="Home article list" attr-title="<?= get_the_title($id); ?>" id="centerCallButton"></a>

                </div>
        </a>
    </div>

  <?php endforeach; ?>
<?php endif; ?>
