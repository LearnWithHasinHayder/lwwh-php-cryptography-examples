<?php 
$password = "My Secret Password";
$hash =  password_hash($password,PASSWORD_BCRYPT,['cost'=>'10']);
echo password_verify($password,$hash); 