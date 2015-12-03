<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DextrouS - User</title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css">
    </head>
    <body class="user_body">
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
                <span style ="color:black;"><center>Welcome to the User section<br/>
                        Here you can create a new user or search the database for existing users</center></span>
                <hr width="700" size="5px" noshade>
                <div class="user_wrap">
                    <div class="user_left">
                        <form method ="post" action="insertdb.php">
                            <span style ="color:blue">
                                Create User:<br />
                            </span>
                            <table>
                                <tr>
                                    <td><label>First Name*: </label></td>
                                    <td><input type="text" name="i_fname" maxlength="35" required/></td>
                                </tr>
                                <tr>
                                    <td><label>Last Name: </label></td>
                                    <td><input type="text" name="i_lname" maxlength="35"/></td>
                                </tr>
                                <tr>
                                    <td><label>Email*: </label></td>
                                    <td><input type="email" name="i_email" maxlength="50" required/></td>
                                </tr>
                                <tr>
                                    <td><label>Home Address:</label></td>
                                    <td><input type="text" name="i_haddr" maxlength="100"/></td>
                                </tr>
                                <tr>
                                    <td><label>Home Phone: </label></td>
                                    <td><input type="text" name="i_hphone" maxlength="10"/></td>
                                </tr>
                                <tr>
                                    <td><label>Cell Phone: </label></td>
                                    <td><input type="text" name="i_cphone" maxlength="10"/></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Create"/></td>
                                    <td><input type="reset" name="Reset"/></td>
                                </tr>
                            </table>
                            <small>* - Required</small>
                        </form> 
                    </div>
                    <div class="user_center"><hr width="5px" size="350" noshade></div>
                    <div class="user_right">
                        <form method ="post" action="searchdb.php">
                            <span style ="color:blue">
                                Search User:<br/>
                                <small>Enter one or more search criteria</small><br/>
                            </span>
                            <table>
                                <tr>
                                    <td><label>First Name: </label></td>
                                    <td><input type="text" name="s_fname" maxlength="35"/></td>
                                </tr>
                                <tr>
                                    <td><label>Last Name: </label></td>
                                    <td><input type="text" name="s_lname" maxlength="35"/></td>
                                </tr>
                                <tr>
                                    <td><label>Email: </label></td>
                                    <td><input type="email" name="s_email" maxlength="50"/></td>
                                </tr>
                                <tr>
                                    <td><label>Home Phone: </label></td>
                                    <td><input type="text" name="s_hphone" maxlength="10" /></td>
                                </tr>
                                <tr>
                                    <td><label>Cell Phone: </label></td>
                                    <td><input type="text" name="s_cphone" maxlength="10"/></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Search"/></td>
                                    <td><input type="reset" name="Reset"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <hr width="700" size="5px" noshade>
            </div>
    </body>
</html>