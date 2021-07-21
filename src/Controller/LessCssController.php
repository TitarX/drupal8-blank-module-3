<?php

namespace Drupal\less_css\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;

class LessCssController extends ControllerBase {

  public function access(AccountInterface $account) {
    // return AccessResult::allowedIf($account->hasPermission('do example things') && $this->someOtherCustomCondition());
    return AccessResult::allowedIf(TRUE);
  }

}
