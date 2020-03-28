<?php
$md5 = md5( "Some Text" );
$sha1 = sha1( "Some Text" );
$sha2 = bin2hex( mhash( MHASH_MD5, "Some Text" ) );

printf( "MD5  = %s\nSHA1 = %s\nSHA2 = %s", $md5, $sha1, $sha2 );