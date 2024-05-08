<?php

/**
 * hub page modular
 */
?>
<header>
  <h1 class="page-title screen-reader-text" id="hubPage"><?php single_post_title(); ?></h1>
</header>
<div class="col-12 <?php echo esc_attr($atts['offset']); ?> <?php echo esc_attr($atts['col']); ?> storesBox">
  <div class="bgcBox">
    <div class="storeBoxContact">

      <div class="row">
        <nav class="col-12 internNav">
          <?php do_action('lsl_hub_breadcrumbs'); ?>
        </nav>
        <p class="col-12"><?php esc_html_e('Encuentra los centros más cercanos', 'lsl-albia') ?> </p>
        <div class="col-12 searchToolExtra">
          <div class="row">
            <select class="col-6 selectpicker toolExtraNb1" multiple title='<?php
                                                                            esc_html_e('Instalaciones', 'lsl-albia'); ?>' data-width="fit" name="lsl_facility[]" form="hub_search_form">
              <?php foreach ($terms_facilities as $term) : ?>
                <option value="<?php echo esc_attr($term->name); ?>" <?php if (isset($_GET['lsl_facility']) && in_array($term->name, $_GET['lsl_facility'])) echo 'selected'; ?>><?php echo esc_html($term->name); ?></option>
              <?php endforeach; ?>
            </select>
            <select class="col-6 selectpicker toolExtraNb2" multiple title='<?php esc_html_e('Servicios', 'lsl-albia'); ?>' data-width="fit" name="lsl_service[]" form="hub_search_form">
              <?php foreach ($terms_services as $term) : ?>
                <option value="<?php echo esc_attr($term->name); ?>" <?php if (isset($_GET['lsl_service']) && in_array($term->name, $_GET['lsl_service'])) echo 'selected'; ?>><?php echo esc_html($term->name); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <form id="hub_search_form" action="<?php echo esc_attr(get_page_link(get_option('lslp_search_page_id'))); ?>" method="GET" class="searchToolHub">
          <button type="button" class="rounded-left localisationButton">
            <img src="<?php echo esc_url(get_bloginfo('stylesheet_directory') . '/img/icons/gps-location.svg'); ?>" alt="">
          </button>
          <input class="searchBox typeahead" autocomplete="off" type="city" placeholder="<?php esc_attr_e('Ciudad, código postal', 'lsl-albia'); ?>" name="query" value="<?php if (isset($_GET['query'])) echo sanitize_text_field($_GET['query']); ?>">
          <button type="submit" class="rounded-right searchButton">
            <img src="<?php echo esc_url(get_bloginfo('stylesheet_directory') . '/img/icons/magnifying-glass.svg'); ?>" alt="">
          </button>
        </form>
        <h1 class="col-12 resultSearch">
          <?php // START logic for displaying <h2> text \\
          global $wp_query;

          if (isset($_GET['lat']) && isset($_GET['lng'])) { // geolocation search

            $h2 = __("Resultados en tu ubicación actual: ", 'lsl-albia');
          } elseif (isset($_GET['query']) && empty($_GET['query'])) { // keyword search with no query string

            $h2 = __("Centros en España: ", 'lsl-albia');
          } elseif (isset($_GET['query']) && !empty($_GET['query'])) { // keyword search with query string and filters
            $h2 = __("Resultados de tu búsqueda: ", 'lsl-albia');

            $h2 .= '"' . sanitize_text_field($_GET['query']);


            if (isset($_GET['lsl_facility']) && $_GET['lsl_facility'][0] !== "") {

              // display lsl_facility selections
              foreach ($_GET['lsl_facility'] as $elem) {

                $h2 .= " / " . sanitize_text_field($elem);
              }
            }

            if (isset($_GET['lsl_service']) && $_GET['lsl_service'][0] !== "") {

              // display lsl_service selections
              foreach ($_GET['lsl_service'] as $elem) {

                $h2 .= " / " . sanitize_text_field($elem);
              }
            }

            $h2 .= '"';
          } elseif (isset($wp_query->query_vars['lsl_location']) && isset($wp_query->query_vars['lsl_loc_type'])) {

            $h2 = __("Tanatorios y funerarias en ", 'lsl-albia');

            $location_name = $wp_query->get_queried_object()->name;

            $h2 .= sanitize_text_field($location_name);
          } else {

            $h2 = __("Centros en España: ", 'lsl-albia');
          }
          echo esc_html($h2);
          // END logic for displaying <h2> text \\
          ?>

          <?php // START logic for displaying <h2> found centres count \\
          if (is_array($centre_results)) echo esc_html("(" . count($centre_results) . ")");
          // END logic for displaying <h2> found centres count \\
          ?>
        </h1>

        <?php if ($centre_results !== FALSE) : ?>
          <?php if (!empty($centre_results)) : ?>
            <?php foreach ($centre_results as $key => $centre) : ?>
              <div class="col-12 localisationBox">
                <div class="row align-items-center justify-content-center">
                  <div class="col-12 col-lg-2 compomentItemSearch align-items-center" data-lsl-gmaps-marker-id="<?php echo esc_attr($key + 1); ?>">
                    <div class="compomentItemSearch-number">
                      <?php echo esc_html($key + 1); ?>
                    </div>
                    <div class="compomentItemSearch-unit">
                      <?php if (isset($centre->distance) && $centre->distance > 0) echo esc_html($centre->distance . " km"); ?>
                    </div>
                    <div class="compomentItemSearch-show">
                    </div>
                  </div>
                  <a class="col-12 col-lg-5 storesInfos align-items-center" href="<?php echo esc_url($centre->link); ?>">
                    <h2>
                      <?php echo sanitize_text_field($centre->post_title); ?>
                    </h2>
                    <address>
                      <?php
                      $address = "";
                      if (isset($centre->meta_data->address_1) && !empty($centre->meta_data->address_1)) $address .= sanitize_text_field($centre->meta_data->address_1) . ", ";
                      if (isset($centre->meta_data->postal_code) && !empty($centre->meta_data->postal_code)) $address .= sanitize_text_field($centre->meta_data->postal_code) . ", ";
                      if (isset($centre->meta_data->city) && !empty($centre->meta_data->city)) $address .= sanitize_text_field($centre->meta_data->city) . ", ";
                      if (isset($centre->province) && !empty($centre->province)) $address .= sanitize_text_field($centre->province);

                      echo esc_html($address);
                      ?>
                    </address>
                  </a>
                  <a thref="<?php echo esc_url('tel: +34' . $centre->meta_data->phone); ?>" data-phone="<?php echo esc_attr($centre->meta_data->phone); ?>" attr-location="Search Page" attr-title="<?php echo sanitize_text_field($centre->post_title); ?>" class="col-12 col-lg-5 rounded callButton align-items-center blog_desktop" id="buttonPadding">

                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php else : // something went wrong with retrieving search results...
        ?>

          <p><?php esc_html_e("Something went wrong with your search... Please try again.", 'lyra-store-locator'); ?></p>

        <?php endif; ?>

      </div>
    </div>
  </div>
</div>
<div class="col-12 <?php echo esc_attr($atts['col-map']); ?> mapBox">
  <div id="map" class="localisationBigBox">
  </div>
  <div class="mapButton hiddenMoreSm" id="mapButton">
  </div>

</div>