<?php

/*

The purpose of this file is to demonstrate how to check a given password against a stored hash with Phpass.
This is useful when creating a user login system.

Storing and retrieving the actual hash is out of the scope of this project,
for secure database interaction please check out github.com/sunnysingh/database

*/

require("PasswordHash.php");

$hasher = new PasswordHash(8, false);

// In a typical situation, you will have a form with the "method" attribute set to "post" with an input of name "password"
$password = $_POST["password"];

// Passwords should never be longer than 72 characters to prevent DoS attacks
if (strlen($password) > 72) { die("Password must be 72 characters or less"); }

// Just in case the hash isn't found
$stored_hash = "*";

// Retrieve the hash that you stored earlier
$stored_hash = "this is the hash we stored earlier";

// Check that the password is correct, returns a boolean
$check = $hasher->CheckPassword($password, $stored_hash);

if ($check) {

 // passwords matched! show account dashboard or something

} else {

 // passwords didn't match, show an error

}

?>