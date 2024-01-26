<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "copwebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM algorithmtable where title = 'rape';";


echo "The title ".$conn->query($sql)['title'];

$conn->close();
?>

</body>
</html>