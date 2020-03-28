<?php 
$blowfish_salt = "$2y$10$".bin2hex(openssl_random_pseudo_bytes(11));
echo $blowfish_salt."\n";
$hash = crypt("HelloWorlds",$blowfish_salt);

echo $hash;
echo hash_equals("HelloWorlds",$hash);