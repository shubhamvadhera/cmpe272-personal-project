<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                color: black;
                font-size: 0.75em;
            }
            th, td {
                padding: 5px;
            }
        </style>
        <title>DextrouS - Search Users</title>
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
                <?php
                //DB Credentials
                $username = "root";
                $host = "localhost";
                $database = "dextrousdb";
                $password = "";

                //Connect to Database
                $conn = connectDB($host, $database, $username, $password);

                //Query users database
                $query = buildSearchQuery();
                //print($query);
                //Fetch results in result set
                $result = runQuery($query, $conn);
                //Print reults as table
                print("<span style =\"color:black;\"><center>
                        Here are the search results:</center><br/></span>
                ");
                printResTable($result);

                function buildSearchQuery() {
                    extract($_POST);
                    if (empty($s_fname) && empty($s_lname) && empty($s_email) && empty($s_hphone) && empty($s_cphone)) {
                        print("<span style =\"color:black;\">Enter atleast one field for search criteria!</span>");
                        print("<br/><a href=\"user.php\"><span style=\"color:blue\"><u>Try Again</u></span></a>");
                        die();
                    }
                    $part1 = "SELECT * FROM dextrousdb.users WHERE";
                    $part2 = "";
                    $firstField = FALSE;
                    if (!empty($s_fname)) {
                        //echo "enter first name";
                        if ($firstField) {
                            $part2.=" AND";
                        }
                        //echo $s_fname;
                        $part2.=" fname = '" . $s_fname . "'";
                        //echo $part2;
                        $firstField = TRUE;
                    }
                    if (!empty($s_lname)) {
                        if ($firstField) {
                            $part2.=" AND";
                        }
                        $part2.=" lname = '" . $s_lname . "'";
                        $firstField = TRUE;
                    }
                    if (!empty($s_email)) {
                        if ($firstField) {
                            $part2.=" AND";
                        }
                        $part2.=" email = '" . $s_email . "'";
                        $firstField = TRUE;
                    }
                    if (!empty($s_hphone)) {
                        if ($firstField) {
                            $part2.=" AND";
                        }
                        $part2.=" hphone = '" . $s_hphone . "'";
                        $firstField = TRUE;
                    }
                    if (!empty($s_cphone)) {
                        if ($firstField) {
                            $part2.=" AND";
                        }
                        $part2.=" cphone = '" . $s_cphone . "'";
                        $firstField = TRUE;
                    }
                    $query = $part1 . $part2;
                    return $query;
                }

                function printResTable($result) {
                    $numRows = mysql_num_rows($result);
                    if ($numRows == 0) {
                        print("<span style =\"color:black;\">No results for given criteria !</span>");
                        print("<br><br><a href=\"user.php\"><span style=\"color:blue\"><u>Try Again</u></span></a>");
                        die();
                    }
                    print("<table>
                <tr>
                <th>First Name</th>
                <th>Last Name</th> 
                <th>Email</th>
                <th>Home Address</th>
                <th>Home Phone</th>
                <th>Cell Phone</th>
                </tr>
                ");
                    for ($i = 0; $i < $numRows; $i++) {
                        print("<tr>");
                        for ($j = 0; $j < 6; $j++) {
                            print("<td>" . mysql_result($result, $i, $j) . "</td>");
                        }
                        print("</tr>");
                    }
                    print("</table>");
                }

                function runQuery($query, $conn) {
                    if (!$result = mysql_query($query, $conn)) {
                        die("Could not execute query" . mysql_error());
                    }
                    return $result;
                }

                function connectDB($host, $database, $username, $password) {
                    if (!($conn = @mysql_connect($host, $username, $password))) {
                        die("Could not connect to database" . mysql_error());
                    }
                    if (!mysql_select_db($database, $conn)) {
                        die("Could not open database" . mysql_error());
                    }

                    return $conn;
                }
                ?>
                <br/>
                <a href="user.php"><span style="color:blue"><u>Back to DexrouS - User</u></span></a>
            </div>
        </div>
        <hr width="700" size="5px" noshade>
    </div>
</body>
</html>