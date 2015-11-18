<?php
require_once 'data/UserDAO.php';
class UserService {

    public function controleerLogin($gebruikersnaam, $password) {
      $userDAO = new UserDAO();
      $correct = $userDAO->checkCreditials($gebruikersnaam, $password);        
      return $correct;
    }

}
