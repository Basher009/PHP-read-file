<?php
$data =  file_get_contents('pac.txt');
// echo $data;

$result = strpos($data, 'AddHandler application/x-httpd-ea-php81___lsphp .php .php8 .phtml');
echo $result;

if(!$result){
    $pattern = "AddHandler application/x-httpd-ea-php81___lsphp .php .php7 .phtml" or "AddHandler application/x-httpd-ea-php81___lsphp .php .php6 .phtml";
   file_put_contents('pac.txt', str_replace($pattern, 'AddHandler application/x-httpd-ea-php81___lsphp .php .php8 .phtml', $data));
}
