<?php

function loadLanguage($lang){

    $json_complete_str = file_get_contents("assets/langs/" . $lang . ".json");
    $parsed_language = json_decode($json_complete_str);
    return $parsed_language;

}

function getString($stringname, $lang){

   $strings = loadLanguage($lang);
   $string = strval($strings->$stringname);

return $string;
}