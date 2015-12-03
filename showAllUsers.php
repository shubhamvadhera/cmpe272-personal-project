<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                color: black;
                font-size: 0.95em;
            }
            th, td {
                padding: 5px;
            }
        </style>
        <title></title>
    </head>
    <body>
        <?php
        $ch = curl_init("http://parveen-kumar.com/pkd/allu.php");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        print "<h3> Remote Users from http://parveen-kumar.com/pkd/allu.php : </h3><br/>";
        print curl_exec($ch);
        curl_close($ch);
        ?>
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
        print "<h3> Local Users from database : </h3><br/>";
        printResTable($result);

        function buildSearchQuery() {
            $query = "SELECT * FROM dextrousdb.users";
            return $query;
        }

        function printResTable($result) {
            $numRows = mysql_num_rows($result);
            if ($numRows == 0) {
                print("<span style =\"color:black;\">No results for given criteria !</span>");
                //print("<br><br><a href=\"user.php\"><span style=\"color:blue\"><u>Try Again</u></span></a>");
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
    </body>
</html>
