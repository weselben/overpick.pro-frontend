<?php

require "getlang.php";
require "strings.php";

$content = file_get_contents('assets/html/header.html');

$content = str_replace("%website.keywords%", getString("website.keywords", getLang()), $content);
$content = str_replace("%php.language%", getLang(), $content);
$content = str_replace("%website.title%", getString("website.title", getLang()), $content);


echo $content;


?>