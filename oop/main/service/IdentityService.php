<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 14:04
 * To change this template use File | Settings | File Templates.
 */

namespace org\camunda\php\sdk\service;


use Exception;
use org\camunda\php\sdk\entity\request\IdentityRequest;
use org\camunda\php\sdk\entity\response\Identity;
use org\camunda\php\sdk\entity\response\IdentityVerify;

class IdentityService extends RequestService {

  /**
   * Gets the groups of a user and all users that share a group with the given user.
   * @link http://docs.camunda.org/latest/api-references/rest/#identity-get-a-users-groups
   *
   * @param IdentityRequest $request
   * @return Identity $this
   * @throws \Exception
   */
  public function getGroups(IdentityRequest $request) {
    $identity = new Identity();
    $this->setRequestUrl('/identity/groups');
    $this->setRequestObject($request);
    $this->setRequestMethod('GET');

    try {
      return $identity->cast($this->execute());
    } catch (Exception $e) {
      throw $e;
    }
  }
  
  /**
   * Verifies that user credentials are valid.
   * @link http:https://docs.camunda.org/manual/7.9/reference/rest/identity/verify-user/
   *
   * @param IdentityRequest $request
   * @return IdentityVerify $this
   * @throws \Exception
   */
   public function verifyUser(IdentityRequest $request) {
    $identity = new IdentityVerify();
    $this->setRequestUrl('/identity/verify');
    $this->setRequestObject($request);
    $this->setRequestMethod('POST');

    try {
      return $identity->cast($this->execute());
    } catch (Exception $e) {
      throw $e;
    }
  }

}
