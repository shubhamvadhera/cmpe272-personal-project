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
                <p><small>Your last 5 visited products:</small></p>
                <?php
                $myCookies = array('visited_gta5' => 'GTA 5', 'visited_maxpayne' => 'Max Payne', 'visited_fifa2015' => 'FIFA 2015', 'visited_cod' => 'Call of Duty', 'visited_sof' => 'Soldier of Fortune', 'visited_mariobros' => 'Mario Bros', 'visited_angrybirds' => 'Angry Birds', 'visited_cs' => 'Counter Strike', 'visited_nfs' => 'Need for Speed', 'visited_urbanchaos' => 'Urban Chaos');
                $myCookieLinks = array('visited_gta5' => '<li><a href = "GTA5.php">GTA 5</a></li>', 'visited_maxpayne' => '<li><a href = "maxpayne.php">Max Payne</a></li>', 'visited_fifa2015' => '<li><a href = "fifa2015.php">FIFA 2015</a></li>', 'visited_cod' => '<li><a href = "callofduty.php">Call of Duty</a></li>', 'visited_sof' => '<li><a href = "sof.php">Soldier of Fortune</a></li>', 'visited_mariobros' => '<li><a href = "mariobros.php">Mario Bros</a></li>', 'visited_angrybirds' => '<li><a href = "angrybirds.php">Angry Birds</a></li>', 'visited_cs' => '<li><a href = "cs.php">Counter Strike</a></li>', 'visited_nfs' => '<li><a href = "nfs.php">Need for Speed</a></li>', 'visited_urbanchaos' => '<li><a href = "urbanchaos.php">Urban Chaos</a></li>');
                $visitedCookies = array();
                foreach ($_COOKIE as $key => $val) {
                    if (array_key_exists($key, $myCookies)) {
                        $temp_exp = explode('@', $val);
                        $visitedCookies[$key] = $temp_exp[0];
                    }
                }
                arsort($visitedCookies);
                $lastFive = array_slice($visitedCookies, 0, 5);
                print("<ol style='font-size:medium'>");
                foreach ($lastFive as $key => $val) {
                    print($myCookieLinks[$key] . "\n");
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