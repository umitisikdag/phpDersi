<?php

function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
}
$myurl=getUrl();
//print_r(parse_url($myurl));

$path= parse_url($myurl, PHP_URL_PATH);

$pathComponents = explode("/", trim($path, "/")); // trim to prevent
//echo "<br><br>";                                                 // empty array elements
echo $pathComponents[2]; // prints 'abc'

?>