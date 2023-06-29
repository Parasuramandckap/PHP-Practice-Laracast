<?php

function dd($values){
    echo "<pre>";
    print_r($values);
    echo "</pre>";

    die();
}
function usrl($values){
    return $_SERVER["REQUEST_URI"] === $values;
}