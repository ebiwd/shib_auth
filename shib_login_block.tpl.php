<?php
/**
 * @file
 *  Login URL theme.
 */
?>
<div id="shib_login_url" class="<?php print $div_class ?>">
  <?php if ($automatic_redirect) {
    print '<p>' . t('You will be automatically sent to the login form in 3 seconds.') . '</p>';
  } ?>
  <a class="<?php print $link_class ?>" href="<?php print $login_url ?>"><?php print $login_text ?></a>
</div>
