<?php 
//print_r(hash_algos());
 echo hash('whirlpool',"DingDOng");

 //print_r(hash_hmac_algos());
echo "\n";
echo hash_hmac('whirlpool',"DingDOng","Secret2");