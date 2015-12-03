<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DextrouS - Products</title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css">
    </head>
    <body class='product_body'>
        <div id="wrapper">
            <div  id ="bannerContainer">
                <div id="logo">

                </div>
                <div id="banner">

                </div>
            </div>
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="secure.php">Secure Section</a></li>
                </ul>

            </nav>
            <div id="content_area">
                <p><small>Top 5 visited products:</small></p>
                <?php
                $countFile = array('angry', 'cod', 'cs', 'fifa', 'gta5', 'mario', 'maxp', 'nfs', 'sof','urban');
                //$myCookies1 = array('count_gta5' => 'GTA 5', 'count_maxp' => 'Max Payne', 'count_fifa' => 'FIFA 2015', 'count_cod' => 'Call of Duty', 'count_sof' => 'Soldier of Fortune', 'count_mario' => 'Mario Bros', 'count_angry' => 'Angry Birds', 'count_cs' => 'Counter Strike', 'count_nfs' => 'Need for Speed', 'count_urban' => 'Urban Chaos');
                $myCookieLinks1 = array('gta5' => '<li><a href = "GTA5.php">GTA 5</a></li>', 'maxp' => '<li><a href = "maxpayne.php">Max Payne</a></li>', 'fifa' => '<li><a href = "fifa2015.php">FIFA 2015</a></li>', 'cod' => '<li><a href = "callofduty.php">Call of Duty</a></li>', 'sof' => '<li><a href = "sof.php">Soldier of Fortune</a></li>', 'mario' => '<li><a href = "mariobros.php">Mario Bros</a></li>', 'angry' => '<li><a href = "angrybirds.php">Angry Birds</a></li>', 'cs' => '<li><a href = "cs.php">Counter Strike</a></li>', 'nfs' => '<li><a href = "nfs.php">Need for Speed</a></li>', 'urban' => '<li><a href = "urbanchaos.php">Urban Chaos</a></li>');
                $countofCookies = array();
                foreach ($countFile as $fn) {
                    $fullFn = "files/count_".$fn.".txt";
                    $hits = (int)file_get_contents($fullFn);
                    $countofCookies[$fn] = $hits;
                }
                arsort($countofCookies);
                $lastFivec = array_slice($countofCookies, 0, 5);
                print("<ol style='font-size:medium'>");
                foreach ($lastFivec as $key => $val) {
                    print($myCookieLinks1[$key] . ": Visited: " . $val . " times\n");
                }
                print("</ol>");
                ?>
                <a href = "products.php">Back</a>
            </div>
            <footer>
                <p> All rights reserved</p>
            </footer>
        </div>
    </body>

</html>