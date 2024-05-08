<?php
/**
 * Terms field in lsl contact form
 */
?>
<p class="comment-form-terms">
    <input id="terms" name="terms" type="checkbox" required="required" value="true"/>
    <label for="terms">
        <?php echo sprintf( esc_html__( 'I have read the %s and I accept them', 'lsl-albia' ) . '.', '<a href="http://www.albia.es/PoliticaDePrivacidad.html" target="_blank">' . esc_html__( 'privacy policy', 'lsl-albia' ) . '</a>' ); ?>
        <span class="required">*</span>
    </label>
</p>
