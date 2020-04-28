<?php

/**
 * @param $text
 * @return bool|false|string|string[]|null
 * STRING SLUG generator...
 */
function slugGenerate($text) {
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'N-A';
    }

    return $text;
}

//SHOW ALERT message...
function showMessage($type, $message) {
    session()->flash('type', $type);
    session()->flash('message', $message);
}
