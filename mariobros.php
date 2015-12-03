<?php
$countFile = "files/count_mario.txt";
$hits = (int) file_get_contents($countFile);
$hits++;
$fwrite = fopen($countFile, "w");
fputs($fwrite, "$hits");
fclose($fwrite);
//echo $hits;
$cookie_name = "visited_mariobros";
$cookie_time = time();
$cookie_count = 1;
if (isset($_COOKIE['visited_mariobros'])) {
    $temp_val = $_COOKIE['visited_mariobros'];
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
        <title>DextrouS: Mario Bros</title>
        <link rel="stylesheet" type="text/css" href="Styles/products.css">

    </head>
    <body class="mario_bros">
        <h3><a href="products.php">Back to DexrouS - Products</a></h3>
        <p>
        <h1><center>Mario Bros</center></h1></p>
    <h2>North American arcade flyer</h2>
    <iframe width="420" height="345"
            src="http://www.youtube.com/embed/bdRAqRG2QqI">
    </iframe>
    <p>
        Mario Bros. features two plumbers, Mario and Luigi, having to investigate the sewers of New York after strange creatures have been appearing down there. 
        <br>The objective of the game is to defeat all of the enemies in each phase. The mechanics of Mario Bros. involve only running and jumping. Unlike future Mario games, players cannot jump on enemies and squash them, unless they were already turned on their back. Each phase is a series of platforms with pipes at each corner of the screen, along with an object called a "POW" block in the center. Phases use wraparound, meaning that enemies and players that go off to one side will reappear on the opposite side.
        <br>
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