<?php 

/**
 * @file
 * Contains \Drupal\spambot\Controller\DefaultController.
 */

namespace Drupal\spambot\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Default controller for the spambot module.
 */
class DefaultController extends ControllerBase {

  public function spambot_user_spam(\Drupal\user\UserInterface $account) {

  	$test = array(
  	'#markup'=> "testing";
  	  		);
return $test;
    /*// Check if current user isn't anonymous user.
    if (!$account->id()) {
      drupal_set_message(t("The Anonymous user account can't be reported for spam. If you intended to block a user account verify that the URL is /user/XXXX/spambot where XXXX is a valid UID"), 'warning');
      return MENU_NOT_FOUND;
    }

    return drupal_get_form('spambot_user_spam_admin_form', $account);*/
  }

}
