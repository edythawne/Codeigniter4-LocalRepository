<?php

/**
 * CSS File load
 * @param $filename
 * @return string
 */
function css_url($filename) {
    return base_url("public/material/css/$filename.css");
}

/**
 * JS File load
 * @param $filename
 * @return string
 */
function js_url($filename) {
    return base_url("public/material/js/$filename.js");
}

/**
 * File Load
 * @param $path
 * @return string
 */
function file_url($path) {
    return base_url("public/$path");
}

?>