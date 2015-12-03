<?php
$countFile = "files/count_sof.txt";
$hits = (int) file_get_contents($countFile);
$hits++;
$fwrite = fopen($countFile, "w");
fputs($fwrite, "$hits");
fclose($fwrite);
//echo $hits;
$cookie_name = "visited_sof";
$cookie_time = time();
$cookie_count = 1;
if (isset($_COOKIE['visited_sof'])) {
    $temp_val = $_COOKIE['visited_sof'];
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
        <title>DextrouS: Soldier of Fortune</title>
        <link rel="stylesheet" type="text/css" href="Styles/products.css">

    </head>
    <body class="sof">
        <h3><a href="products.php">Back to DexrouS - Products</a></h3>
      <p>
      <h1><center>Soldier of Fortune</center></h1></p>
    <h2>There's a reason terrorists can't sleep at night, You are that reason !</h2>
    <iframe width="420" height="345"
            src="http://www.youtube.com/embed/oXDFsnLnb5I">
    </iframe>
    <p>
        The story involves the theft of nuclear weapons, and the main enemy turns out to be a neo-fascist group based in Germany, led by South African exile Sergei Dekker. At the beginning of the game, terrorists steal four nuclear weapons from a storage facility in Russia, and proceed to sell them to various nations. This is a prelude to the acquisition of advanced weapons of mass destruction by this terrorist group. John Mullins, working for a U.S.-based mercenary ("soldier of fortune") organization known only as "The Shop", and his partner, Aaron "Hawk" Parsons, are assigned to prevent the nukes from falling into the wrong hands, and stop the terrorists in their plans. His missions take him to New York City, Siberia, Tokyo, Kosovo, Iraq, Uganda and finally Germany.
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