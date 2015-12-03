<?php
$countFile = "files/count_urban.txt";
$hits = (int) file_get_contents($countFile);
$hits++;
$fwrite = fopen($countFile, "w");
fputs($fwrite, "$hits");
fclose($fwrite);
//echo $hits;
$cookie_name = "visited_urbanchaos";
$cookie_time = time();
$cookie_count = 1;
if (isset($_COOKIE['visited_urbanchaos'])) {
    $temp_val = $_COOKIE['visited_urbanchaos'];
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
        <title>DextrouS: Urban Chaos</title>
        <link rel="stylesheet" type="text/css" href="Styles/products.css">

    </head>
    <body class="urban_chaos">
        <h3><a href="products.php">Back to DexrouS - Products</a></h3>
        <p>
        <h1><center>Urban Chaos</center></h1></p>
    <h2>The call of the nation is above all</h2>
    <iframe width="420" height="345"
            src="http://www.youtube.com/embed/sIdSCwQzSUc">
    </iframe>
    <p>
        The story begins with D'arci Stern, the protagonist, joining the Union City Police Department. Much of her time is spent dealing with the Wildcats, a gang that is getting increasingly bold in their criminal activity. With the help of a vigilante named Roper, D'arci begins to believe that the Wildcats plan to take over Union City. As the Wildcats grow ever bolder, D'arci discovers that the gang is led by Mack Bane, a candidate for mayor of Union City. Eventually, the Wildcats attempt a hostile takeover of the city, which is finally repelled by D'arci, Roper and the police.
        <br><br>
        Some time later, D'arci is investigating a particularly brutal murder. She discovers that the murder was committed by Bane's bodyguards, establishing a connection between Bane and the Wildcats. Soon after, he is arrested by D'arci and Roper in his out of town estate. Even from jail, Bane is able to direct the Wildcats, and D'arci and Roper are forced to deal with several more threats to the city. Later, Bane breaks out of jail and claims to be an Ancient Warlock. He uses his powers to summon a fire beast to destroy the city, but D'arci and Roper defeat it. Bane and the Wildcats flee to a sanctuary tower to fulfill a prophecy; before they can complete their ritual, D'arci and Roper use the tower's ventilation system to destroy Bane and the Wildcats.
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