<?php

namespace org\camunda\php\sdk\entity\response;

use org\camunda\php\sdk\helper\CastHelper;
  
class IdentityVerify extends CastHelper {
  protected $authenticatedUser;
  protected $isAuthenticated;
  
      /**
   * @param mixed $groups
   */
  public function setisAuthenticated($isAuthenticated) {
    $this->isAuthenticated = $isAuthenticated;
  }

  /**
   * @return mixed
   */
  public function getisAuthenticated() {
    return $this->isAuthenticated;
  }
  
    /**
   * @param mixed $groups
   */
  public function setauthenticatedUser($authenticatedUser) {
    $this->authenticatedUser = $authenticatedUser;
  }

  /**
   * @return mixed
   */
  public function getauthenticatedUser() {
    return $this->authenticatedUser;
  }
  
}

?>
