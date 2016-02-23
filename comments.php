<?php
// Deze lijnen mogen niet aangepast of verwijderd worden.
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
    <p class="alert">Deze post is met een wachtwoord beveiligd. Voer je wachtwoord in om de reacties te zien.</p>
    <?php
    return;
}
?>

    <!-- Hier mogen wel aanpassingen gedaan worden. -->

<?php if ( have_comments() ) : // Wordt getoond als het aantal comments > 0 ?>

    <h3 class="comments"><?php comments_number(__('No Responses','diggit'), __('One Response','diggit'), __('% Responses','diggit') );?></h3>

    <ol class="commentlist">
        <!-- Met de wp_list_comments worden de comments op een juiste manier weergegeven.-->
        <?php wp_list_comments('avatar_size=64'); ?>
    </ol>

    <?php previous_comments_link() ?>  <?php next_comments_link() ?>

<?php else : // Wordt weergegeven als er nog geen reacties zijn ?>

    <?php if ( comments_open() ) : ?>

        <!-- Als het mogelijk is om een reactie achter te laten maar nog geen reacties geplaatst zijn. -->

    <?php else : // comments zijn gesloten ?>

        <!-- Als de comments gesloten zijn -->
        <p class="nocomments">Reacties zijn gesloten.</p>

    <?php endif; ?>

<?php endif; ?>


<?php if ( comments_open() ) : // Het is mogelijk om een reactie achter te laten ?>

    <div id="respond">

        <h3><?php comment_form_title( 'Laat een reactie achter', 'Leave a Reply to %s' ); ?></h3>

        <p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>

        <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : // Controleren of het nodig is om te registreren / in te loggen ?>

            <p><?php _e('Je moet ','diggit');?><a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e('ingelogd zijn','diggit');?></a><?php _e(' om een reactie achter te laten.','diggit');?></p>

        <?php else : ?>

            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

                <?php if ( is_user_logged_in() ) : // Controleren of de gebruiker is ingelogd ?>

                    <p><?php _e('Ingelogd als ','diggit');?><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Uitloggen">Log out &raquo;</a></p>

                <?php else : ?>

                    <p class="form-input">
                        <label for="author"><small><?php _e('Name ','diggit'); if ($req) _e('(required)','diggit'); ?></small></label>
                        <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
                    </p>

                    <p class="form-input">
                        <label for="email"><small><?php _e('E-mail ','diggit');?><?php if ($req) _e('(required)','diggit'); ?></small></label>
                        <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
                    </p>

                    <p class="form-input">
                        <label for="url"><small><?php _e('Website','diggit');?></small></label>
                        <input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
                    </p>

                <?php endif; ?>

                <?php comment_id_fields(); ?>

                <p class="comment">
                    <label for="comment"><small><?php _e('Your Comment','diggit');?><span class="required"><?php _e(' (required)','diggit'); ?></span></small></label>
                    <textarea name="comment" id="comment" cols="60%" rows="10" tabindex="4"></textarea>
                </p>

                <p>
                    <input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment','diggit');?>" />
                </p>

                <?php do_action('comment_form', $post->ID); ?>

            </form>

        <?php endif; // Als een registratie nodig is en je niet ingelogd bent. ?>

    </div>

<?php endif; ?>