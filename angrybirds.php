<?php
$countFile = "files/count_angry.txt";
$hits = (int) file_get_contents($countFile);
$hits++;
$fwrite = fopen($countFile, "w");
fputs($fwrite, "$hits");
fclose($fwrite);
//echo $hits;
$cookie_name = "visited_angrybirds";
$cookie_time = time();
$cookie_count = 1;
if (isset($_COOKIE['visited_angrybirds'])) {
    $temp_val = $_COOKIE['visited_angrybirds'];
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
        <title>DextrouS: Angry Birds</title>
        <link rel="stylesheet" type="text/css" href="Styles/products.css">

    </head>
    <body class="angry_birds">
        <h3><a href="products.php">Back to DexrouS - Products</a></h3>
        <br><br><br><br><br><br>
    <h2>The best ever classic slingshot game</h2>
    <iframe width="420" height="345"
            src="http://www.youtube.com/embed/1U2DKKqxHgE">
    </iframe>
    <p>
        In the game, players use a slingshot to launch birds at pigs stationed in or around various structures with the goal of destroying all the pigs on the playing field. As players advance through the game new types of birds become available, some with special abilities that can be activated by the player. DextrouS has supported Angry Birds with numerous free updates that add additional game content, and the company has also released stand-alone holiday and promotional versions of the game.
        <br><br>
    </p>
<center><p>System Requirements:</p></center><br>
<p><br>
    OS: Android<br>
    Processor: 2.5GHz or higher<br>
    Memory: 2GB<br>
    Video Card: NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)<br>
    Sound Card: 100% DirectX 10 compatible<br>
    Space: 65GB<br><br>
    Recommended:<br>
    OS: Android<br>
    Processor: 3.0GHz or higher<br>
    Memory: 8GB<br>
    Video Card: NVIDIA GTX 660 2GB / AMD HD7870 2GB<br>
    Sound Card: 100% DirectX 10 compatible<br>
    Space: 65GB<br>
    <br>
</p>
</body>
</html>