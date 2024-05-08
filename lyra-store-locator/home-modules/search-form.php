<?php
/**
 * Search form home template
 */
?>
<div class="d-flex container container-fluid searchBoxContainer" style="background-image: url(<?php echo esc_url( get_bloginfo( 'stylesheet_directory' ) . '/img/background-home/bgc-home.jpg' ); ?>)">  
    <div class="container align-self-center align-self-lg-start">
        <header>
            <!--<h1 class="page-title screen-reader-text" id="homePage"><?php single_post_title(); ?></h1>-->
        </header>
        <div class="row">
            <div class="col-12 offset-md-1 col-md-10 searchToolContainer">
                <h1 class="text-center">
                    <?php echo $content; ?>
                </h1>
                <form action="<?php echo esc_url( site_url() . '/search' ); ?>" method="GET" class="searchToolHome">
                    <button type="button" class="rounded-left localisationButton">
                            <img src="<?php echo esc_url( get_bloginfo( 'stylesheet_directory' ) . '/img/icons/gps-location.svg' ); ?>" alt="" class="hiddenContent">
                            <p class="hiddenBoxMoreMd localisationTxt"><?php esc_html_e( 'Geolocalización', 'lslp' ); ?></p> 
                    </button>
                    <input class="searchBoxHome typeahead" autocomplete="off" type="city" placeholder="<?php echo esc_attr( $atts['placeholder'] ); ?>" name="query" autocomplete="off">

                    <select class="selectpicker selectBoxHome hiddenBoxMd" multiple title='<?php esc_html_e( 'Instalaciones', 'lsl-albia' ); ?>' data-width="300px" name="lsl_facility[]">
                    <?php foreach( $terms_facilities as $term ): ?>
                        <option value="<?php echo esc_attr( $term->name ); ?>"><?php echo esc_html( $term->name ); ?></option>
                    <?php endforeach; ?>

                    </select>
                    <select class="selectpicker selectBoxHome hiddenBoxMd" multiple title='<?php esc_html_e( 'Servicios', 'lsl-albia' ); ?>' data-width="200px" name="lsl_service[]">
                        <?php foreach( $terms_services as $term ): ?>
      						<option value="<?php echo esc_attr( $term->name ); ?>"><?php echo esc_html( $term->name ); ?></option>
    					<?php endforeach; ?>
                    </select>

                    <select class="selectpicker selectBoxHome hiddenBoxMoreMd" multiple title='<?php esc_attr_e( 'Instalaciones', 'lsl-albia' ); ?>' data-width="fit" name="lsl_facility[]">
                    <?php foreach( $terms_facilities as $term ): ?>
                        <option value="<?php echo esc_attr( $term->name ); ?>"><?php echo esc_html( $term->name ); ?></option>
                    <?php endforeach; ?>

                    </select>
                    <select class="selectpicker selectBoxHome hiddenBoxMoreMd" multiple title='<?php esc_attr_e( 'Servicios', 'lsl-albia' ); ?>' data-width="fit" name="lsl_service[]">
                        <?php foreach( $terms_services as $term ): ?>
      						<option value="<?php echo esc_attr( $term->name ); ?>"><?php echo esc_html( $term->name ); ?></option>
    					<?php endforeach; ?>
                    </select>
                    <button type="submit" class="rounded-right searchButton">
                        <img src="<?php echo esc_url( get_bloginfo( 'stylesheet_directory' ) . '/img/icons/magnifying-glass.svg' ); ?>" alt="" class="hiddenContent">
                        <p class="hiddenBoxMoreMd searchTxt"><?php esc_html_e( 'Buscar', 'lslp' ); ?></p>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
