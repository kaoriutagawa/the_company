<?php
include "../classes/User.php";

//create an obj
$user = new User;

//call the method
$user->store($_POST);

?>