<?php
function getLang() {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if (str_contains($_SERVER['QUERY_STRING'], 'lang=')) {
        parse_str($_SERVER['QUERY_STRING'], $qstringoutput);
        $lang = $qstringoutput['lang'];
    }
    $acceptLang = ['de', 'en'];
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';

    return $lang;
}
?>