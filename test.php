<?php

$cookie_name = "top_cookie_test";
$new_cookie_value = rand();
$countFile = "counter.txt";
$hits = (int) file_get_contents($countFile);
if (!isset($_COOKIE['top_cookie_test']) || (isset($_COOKIE['top_cookie_test']) && $new_cookie_value != $_COOKIE['top_cookie_test'])) {
    $hits++;
    $fwrite = fopen($countFile, "w");
    fputs($fwrite, "$hits");
    fclose($fwrite);
}
setCookie($cookie_name, $new_cookie_value, time() + (60 * 60 * 24 * 30), "/");

echo $hits;
?>