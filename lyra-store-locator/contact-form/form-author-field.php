<?php
/**
 * Author field's lsl contact form
 */
?>
<p class="comment-form-author">
    <label for="author">
        <?php esc_html_e( 'Nombre completo', 'lsl' ); ?>
        <span class="required">*</span>
    </label>
    <input id="author" name="author" type="text" value="<?php echo esc_attr( $commenter['comment_author'] ); ?>" size="30" maxlength="245" aria-required="true" required="required" />
</p>
