<?php

$user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
$user->Logout();
header('location:index.php');

?>
