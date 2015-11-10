<?php

class UserService {

    public function controleerLogin($login, $password) {
        if ($login == "admin" && $password = "geheim") {
            return true;
        }
    }

}
