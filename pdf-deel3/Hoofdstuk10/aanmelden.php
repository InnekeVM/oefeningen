<?php
require_once 'business/UserService.php';

if (isset ($_GET["action"]) && $_GET["action"] == "login"){
    $login = new UserService();
    if($login->controleerLogin($_POST["login"], $_POST["password"])){
         header("location: presentation/geheim.php");
    } 
    
}else { include_once 'presentation/AanmeldForm.php';}


