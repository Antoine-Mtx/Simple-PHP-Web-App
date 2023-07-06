 <?php
$servername = "db"; // Server name where the app has the DB
$username = "antoine"; // user of the DB 
$password = "antoinemdp"; // password of the DB
$dbname = "mono"; // DB name 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}