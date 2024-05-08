<?php
/**
 * Author field's lsl contact form
 */
?>
<p class="comment-form-email">
    <label for="email">
        <?php esc_html_e( 'Email', 'lsl' ); ?>
        <span class="required">*</span>
    </label>
    <input id="email" name="email" type="text" value="<?php esc_attr(  $commenter['comment_author_email'] ) ?>" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required" />
</p>
