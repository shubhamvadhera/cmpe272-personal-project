<!DOCTYPE html>
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
            <p> Welcome to the secure section.</p>
            <p> This area is accessible only to authorized users. If you are not an authorized user, click below to go back to the website</p>
            <h3><a href="index.php">Go back!</a></h3>
            <p> Or provide your credentials below to continue:</p>
            <form method ="post" action="login.php">
                <span style ="color:blue">
                    Login:<br />
                </span>
                Username: <input type="text" name="userid" /><br />
                Password: <input type="password" name="passw" /><br />
                <input type="submit" name="Submit" /><br />
            </form>      


        </div>

        <footer>
            <p> All rights reserved</p>
        </footer>
    </div>
</body>

</html>
