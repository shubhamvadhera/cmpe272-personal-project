<html>
    <head>
        <meta charset="UTF-8">
        <title>DextrouS - Secure</title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css">
    </head>
    <body>
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
                <?php
                extract($_POST);
                $csv = array_map('str_getcsv', file('./files/credentials.csv'));
                $max = sizeof($csv);

                function printCSV() {
                    global $csv;
                    global $max;
                    for ($i = 0; $i < $max; $i++) {
                        echo "User " . ($i + 1) . ": " . $csv[$i][0] . "<br/>";
                    }
                }

                $correct = false;
                if (!$userid || !$passw) {
                    echo "Please enter both User ID and password.";
                } elseif ($userid == "admin") {
                    for ($i = 0; $i < $max; $i++) {
                        if ($csv[$i][0] == "admin" && $csv[$i][1] == $passw) {
                            echo "Welcome admin! Here are the users of your system:<br/><br/>";
                            //print_r($csv);
                            printCSV();
                            $correct = true;
                            break;
                        }
                    }
                    if ($correct == false) {
                        echo "Incorrect admin password. Access denied.";
                    }
                } else {
                    $found = false;
                    for ($i = 0; $i < $max; $i++) {
                        if ($csv[$i][0] == $userid) {
                            if ($csv[$i][1] == $passw) {
                                echo "Welcome " . $userid;
                            } else {
                                echo "Incorrect password for user: " . $userid . ". Please go back and try again";
                            }
                            $found = true;
                            break;
                        }
                    }
                    if ($found == false) {
                        echo "User not found.";
                    }
                }
                ?>
                <br />
                <a href="secure.php">Back</a>
            </div>

            <footer>
                <p> All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
