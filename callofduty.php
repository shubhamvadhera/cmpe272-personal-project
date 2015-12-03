<?php
$countFile = "files/count_cod.txt";
$hits = (int) file_get_contents($countFile);
$hits++;
$fwrite = fopen($countFile, "w");
fputs($fwrite, "$hits");
fclose($fwrite);
//echo $hits;
$cookie_name = "visited_cod";
$cookie_time = time();
$cookie_count = 1;
if (isset($_COOKIE['visited_cod'])) {
    $temp_val = $_COOKIE['visited_cod'];
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
        <title>DextrouS: Call of Duty</title>
        <link rel="stylesheet" type="text/css" href="Styles/products.css">

    </head>
    <body class="call_of_duty">
        <h3><a href="products.php">Back to DexrouS - Products</a></h3>
      <p>
      <h1><center>Call of Duty</center></h1></p>
    <h2>The call of the nation is above all</h2>
    <iframe width="420" height="345"
            src="http://www.youtube.com/embed/k2GMPVXLGbk">
    </iframe>
    <p>
        Call of Duty redefines how FPS is played, with the franchise’s deepest, most rewarding and most engaging experience to date, with a new chain-based fluid movement system, as well as new ways to rank up, customize, and gear up for battle.
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