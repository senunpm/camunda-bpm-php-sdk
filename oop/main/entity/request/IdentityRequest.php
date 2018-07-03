<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 14:06
 * To change this template use File | Settings | File Templates.
 */

namespace org\camunda\php\sdk\entity\request;


class IdentityRequest extends Request {
  protected $userId;
  protected $username;
  protected $password;

   public function __construct($userId = null,$userPwd = null) 
  {
		$this->userId = $userId;
		$this->username = $userId;
		$this->password = $userPwd;
  }
  
  /**
   * @param mixed $userId
   */
  public function setUserId($userId) {
    $this->userId = $userId;
  }

  /**
   * @return mixed
   */
  public function getUserId() {
    return $this->userId;
  }

   /**
   * @param mixed $$password
   */
  public function setPassword($userPwd) {
    $this->password = $password;
  }
  
  /**
   * @return mixed
   */
  public function getPassword() {
    return $this->password;
  }

   /**
   * @param mixed $$username
   */
  public function setUsername($username) {
    $this->username = $username;
  }
  
  /**
   * @return mixed
   */
  public function getUsername() {
    return $this->username;
  }


}
