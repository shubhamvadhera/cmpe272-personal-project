<?php
$countFile = "files/count_gta5.txt";
$hits = (int) file_get_contents($countFile);
$hits++;
$fwrite = fopen($countFile, "w");
fputs($fwrite, "$hits");
fclose($fwrite);
//echo $hits;
$cookie_name = "visited_gta5";
$cookie_time = time();
$cookie_count = 1;
if (isset($_COOKIE['visited_gta5'])) {
    $temp_val = $_COOKIE['visited_gta5'];
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
        <title>DextrouS: GTA - 5</title>
        <link rel="stylesheet" type="text/css" href="Styles/products.css">
    </head>
    <body class="gta5">
        <p>
        <h3><a href="products.php">Back to DexrouS - Products</a></h3>
        <h1><center>GTA 5</center></h1></p>
    <h2>If you wish life was just like the movies,
        come live where it is</h2>
    <iframe width="420" height="345"
            src="http://www.youtube.com/embed/VjZ5tgjPVfU">
    </iframe>
    <p>
        Nine years after a botched robbery in Ludendorff, North Yankton, former bank robber Michael Townley is living under witness protection with his family in Los Santos, San Andreas, under the alias Michael De Santa. When Michael discovers his wife, Amanda, has been sleeping with her tennis coach, he chases the coach to a mansion and destroys it out of anger. The mansion's owner turns out to be the girlfriend of a Mexican drug lord named Martin Madrazo. Madrazo demands compensation under the threat of further violence, so Michael goes back into a life of crime to obtain the money. Together with his accomplice, Franklin Clinton, who previously worked as a repossession agent for an Armenian car salesman, they perform a jewellery shop heist to help pay their debt. Michael's sole surviving partner in the Ludendorff robbery, Trevor Philips, now a drug dealer, hears of the jewellery heist and realises that it was Michael's handiwork. The two reunite after Trevor tracks Michael down in Los Santos.
        <br><br>
        The personal lives of the protagonists begin to spiral out of control. Michael's family leaves him, and his attempts to make something of himself bring him into conflict with Devin Weston, a self-made billionaire venture capitalist and corporate raider who develops a grudge against him and vows revenge after Devin's lawyer dies in an accident and Michael is blamed for it. Franklin rescues his friend Lamar Davis from gangster and former friend Harold "Stretch" Joseph, who repeatedly attempts to kill Lamar to prove himself to his brethren. Trevor's reckless efforts to consolidate his control over various black markets in Blaine County see him waging war against the San Andreas chapter of The Lost outlaw motorcycle club, a number of Latin American street gangs, rival meth dealers, government-sponsored mercenaries and Triad kingpin Wei Cheng.
        <br><br>
        Federal Investigation Bureau (FIB) government agents Dave Norton and Steve Haines contact Michael and demand that he perform a series of operations with Franklin and Trevor to undermine a rival agency, the International Affairs Agency (IAA). Under Haines' direction, they attack an armoured convoy carrying funds intended for the IAA and raid a bank containing the payroll for all corrupt police and public officials in Los Santos. As Haines comes under increasing scrutiny for his methods, he forces Franklin and Michael to infiltrate the FIB headquarters and erase any evidence being used against him from their servers. Michael takes the opportunity to wipe any data on his own activities, destroying Haines' leverage over him. The trio start planning their most daring feat ever: raiding the Union Depository's gold bullion reserve, and Michael makes amends with his family and they start living together again after returning to Los Santos.
        <br><br>
        Eventually, Trevor discovers that a former Ludendorff heist accomplice, Brad Snider, was not in prison as he was led to believe, but killed during the heist and buried in the grave marked for Michael. Trevor's feelings of betrayal cause friction within the group and threaten to undermine their Union Depository plans. When Michael and Norton, both of whom are betrayed by Haines, are caught in a Mexican standoff between the FIB, IAA and private security firm Merryweather, Trevor aids in their escape, holding that only he has the right to kill Michael. Despite not forgiving Michael, Trevor still wants to perform the Union Depository heist; the duo agree to part ways afterwards.
        <br><br>
        The Union Depository heist is completed successfully, but Franklin is approached by two parties separately who demand that he kill Trevor or Michael. Haines and Norton contend that Trevor is a liability, and Weston wants retribution for Michael's betrayal. Franklin has three choices: kill Michael, kill Trevor or kill neither and face their enemies together. Should Franklin kill Trevor, he will receive help from Michael and remains friends with Michael. Should Franklin kill Michael he ceases contact with Trevor. Should he kill neither, the trio withstand an onslaught from the FIB and Merryweather before going on to kill Haines, Stretch, Cheng and Weston, the three cease working together but remain friends.
        <br><br></p>
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