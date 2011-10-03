<?php

/*

The purpose of this file is to demonstrate how to hash a password with Phpass.
This is useful when creating an account for a user.

Storing and retrieving the actual hash is out of the scope of this project,
for secure database interaction please check out github.com/sunnysingh/database

*/

require("PasswordHash.php");

$hasher = new PasswordHash(8, false);

// In a typical situation, you will have a form with the "method" attribute set to "post" with an input of name "password"
$password = $_POST["password"];

// Passwords should never be longer than 72 characters to prevent DoS attacks
if (strlen($password) > 72) { die("Password must be 72 characters or less"); }

// The $hash variable will contain the hash of the password
$hash = $hasher->HashPassword($password);

if (strlen($hash) >= 20) {

 // store the value of $hash in a database or something
 
} else {

 // something went wrong
  
}

?>