<?php
include "getlang.php";

function loadLanguage($lang){

    $parsed_language = yaml_parse_file("assets/langs/" . $lang . ".yml");
    return $parsed_language;

}

function getString($stringname, $lang){

   $strings = loadLanguage($lang);
   $string = $strings[$stringname];

return $string;
}