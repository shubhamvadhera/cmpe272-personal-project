<?php
$countFile = "files/count_maxp.txt";
$hits = (int) file_get_contents($countFile);
$hits++;
$fwrite = fopen($countFile, "w");
fputs($fwrite, "$hits");
fclose($fwrite);
//echo $hits;
$cookie_name = "visited_maxpayne";
$cookie_time = time();
$cookie_count = 1;
if (isset($_COOKIE['visited_maxpayne'])) {
    $temp_val = $_COOKIE['visited_maxpayne'];
    $temp_exp = explode('@', $temp_val);
    if (!isset($temp_exp[1])) {
                $currNum = 0;
            } else {
                $currNum = (int) $temp_exp[1];
            }
    $cookie_count = ++$currNum;
}
$cookie_value = $cookie_time . "@" . $cookie_count;
setCookie($cookie_name, $cookie_value, time() + (60 * 60 * 24 * 30), "/");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DextrouS: Max Payne</title>
        <link rel="stylesheet" type="text/css" href="Styles/products.css">

    </head>
    <body class="max_payne">
        <h3><a href="products.php">Back to DexrouS - Products</a></h3>
      <p>
        <h1><center>Max Payne</center></h1></p>
    <h2>There are 2 types of people, those who spend their lives trying to build their future, and those who spend their lives trying to re-build the past</h2>
    <iframe width="420" height="345"
            src="http://www.youtube.com/embed/veFgqFj5IH0">
    </iframe>
    <p>
        For Max Payne, the tragedies that took his loved ones years ago are wounds that refuse to heal. No longer a cop, close to washed up and addicted to pain killers, Max takes a job in São Paulo, Brazil, protecting the family of wealthy real estate mogul Rodrigo Branco, in an effort to finally escape his troubled past. But as events spiral out of his control, Max Payne finds himself alone on the streets of an unfamiliar city, desperately searching for the truth and fighting for a way out.
        <br><br>
Featuring cutting edge shooting mechanics for precision gunplay, advanced new Bullet Time® and Shootdodge™ effects, full integration of Natural Motion’s Euphoria Character Behavior system for lifelike movement and a dark and twisted story, Max Payne 3 is a seamless, highly detailed, cinematic experience from Rockstar Games.
<br><br>
In addition to an expansive single-player campaign, Max Payne 3 will also be the first entry in the series to introduce a thorough and engrossing multiplayer experience. In a unique twist, Max Payne 3 multiplayer delivers a compelling experience that dynamically alters maps and mode progression for all players in a match. Along with traditional multiplayer modes, Max Payne 3 will also include a deep reward and leveling system, persistent clans and multiple strategic load-out options.
        <br><br>
    </p>
<center><p>System Requirements:</p></center><br>
<p>
    Minimum:<br>
    OS: Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1, Windows Vista 64 Bit Service Pack 2* (*NVIDIA video card recommended if running Vista OS)<br>
    Processor: Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz<br>
    Memory: 4GB<br>
    Video Card: NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)<br>
    Sound Card: 100% DirectX 10 compatible<br>
    HDD Space: 65GB<br>
    DVD Drive<br><br>
    Recommended:<br>
    OS: Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1<br>
    Processor: Intel Core i5 3470 @ 3.2GHZ (4 CPUs) / AMD X8 FX-8350 @ 4GHZ (8 CPUs)<br>
    Memory: 8GB<br>
    Video Card: NVIDIA GTX 660 2GB / AMD HD7870 2GB<br>
    Sound Card: 100% DirectX 10 compatible<br>
    HDD Space: 65GB<br>
    DVD Drive<br>
</p>
</body>
</html>
