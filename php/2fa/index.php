<?php
function Encrypt(string $iv)
{
  $now = new DateTime();
  $key = $now->format('YmdHi');
  $text = $key;  
  $cipher_algo = "AES-128-CTR"; 
  return openssl_encrypt($text, $cipher_algo,
  $key, 0, $iv);
}
/*
function Decrypt(string $iv, string $text)
{
  $now = new DateTime();
  $key = $now->format('YmdHi');
  $cipher_algo = "AES-128-CTR";
  return openssl_decrypt($text, $cipher_algo,
  $key, 0, $iv);
}
*/
function checkValid(string $key,string $value){
  $code = getCode($key);
  return $code==$value;
}
function getCode($key){
  $code = Encrypt($key);
  $byte_array = unpack('C*', $code);
  $sd = 0;
  for($i = 0; $i < count($byte_array);$i++) {
      $sd += (int) $byte_array[$i];
  }
  return $sd;
}
if($_GET["type"]=='get'){
    $key = 'f7c3bc1d808e04732adf679965ccc34ca7ae3441';
    echo getCode($key);
}
if($_GET["type"]=='check'){
    $key = 'f7c3bc1d808e04732adf679965ccc34ca7ae3441';
    echo checkValid($key,$_GET["code"]);
}
?>