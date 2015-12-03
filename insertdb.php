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
                <?php
                //DB Credentials
                $username = "root";
                $host = "localhost";
                $database = "dextrousdb";
                $password = "";

                //Connect to Database
                $conn = connectDB($host, $database, $username, $password);

                //Build insert Query
                $queryI = buildInsertQuery();
                //print($queryI);
                runInsertQuery($queryI, $conn);
                print("<span style =\"color:black;\"><center>
                        User inserted! Here is the data which was saved:</center><br/></span>
                ");

                //Print inserted record
                printLastIns();

                function buildInsertQuery() {
                    extract($_POST);
                    $part1 = "INSERT INTO dextrousdb.users (fname,lname,email,haddr,hphone,cphone) VALUES(";
                    $part2 = "'" . $i_fname . "'," . "'" . $i_lname . "'," . "'" . $i_email . "'," . "'" . $i_haddr . "'," . "'" . $i_hphone . "'," . "'" . $i_cphone . "')";
                    $query = $part1 . $part2;
                    return $query;
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

                function printLastIns() {
                    extract($_POST);
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
                    print("<tr>");
                    print("<td>" . $i_fname . "</td>");
                    print("<td>" . $i_lname . "</td>");
                    print("<td>" . $i_email . "</td>");
                    print("<td>" . $i_haddr . "</td>");
                    print("<td>" . $i_hphone . "</td>");
                    print("<td>" . $i_cphone . "</td>");
                    print("</tr>");
                    print("</table>");
                }

                function runInsertQuery($query, $conn) {
                    if (!mysql_query($query, $conn)) {
                        die("Could not insert records" . mysql_error());
                    }
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