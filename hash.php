<?php

// Your original Password
$password = '121@121';

//PASSWORD_BCRYPT or PASSWORD_DEFAULT use any in the 2nd parameter
/*
PASSWORD_BCRYPT always results 60 characters long string.
PASSWORD_DEFAULT capacity is beyond 60 characters
*/
$password_encrypted = password_hash($password, PASSWORD_BCRYPT);
//For matching with database's encrypted password and user inputted password use the below function.
echo "<script>";
echo "alert('$password_encrypted')";

echo "</script>";



?>
