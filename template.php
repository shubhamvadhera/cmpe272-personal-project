<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"
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
                    <li><a href="index.php"><center>Home</center></a></li>
                    <li><a href="products.php"><center>Products</center></a></li>
                    <li><a href="news.php"><center>News</center></a></li>
                    <li><a href="about.php"><center>About</center></a></li>
                    <li><a href="contact.php"><center>Contact Us</center></a></li>
                    <li><a href="secure.php"><center>Secure Section</center></a></li>
                    <li><a href="user.php"><center>User</center></a><li>
                </ul>

            </nav>
            <div id="content_area">
                <?php echo $content;
                ?>
            </div>

            <footer>
                <p> All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
