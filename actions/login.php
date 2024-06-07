<?php
include "../classes/User.php";

//create an obj
$user = new User;

//calll the method
$user->login($_POST);

?>