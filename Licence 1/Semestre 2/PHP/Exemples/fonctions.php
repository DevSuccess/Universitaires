<?php

function displayData($data) {        
    echo '<pre>';
    print_r($data);
}

function setMajuscule($text) {
    return strtoupper($text);
}


function print_d($data) {
    displayData($data);
    die();
}

?>