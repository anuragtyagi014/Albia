<?php
/**
 * Author field's lsl contact form
 */
?>
<p class="comment-form-comment">
    <label for="comment">
        <?php esc_html_e( 'Mensaje', 'lsl' ); ?>
        <span class="required">*</span>
    </label> 
    <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea>
</p>
