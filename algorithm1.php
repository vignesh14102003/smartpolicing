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

$caseid = $_POST["caseid"];  
$accussion = $_POST["accussion"];  
$accust = $_POST["accust"];  
$case_det = $_POST["case_det"]; 
$p_id = $_POST["p_id"];
$s_id = $_POST["s_id"];



$sc = 0;
$case1 = array("rape","bank","murder");
$case2 = array("theft","robbery");
foreach ($case1 as $c){
if(strpos($accussion, $c) !== false){
$sc = 50;
}
}
foreach ($case2 as $c){
if(strpos($accussion, $c) !== false){
$sc = 30;
}
}
$sql = "INSERT INTO `algorithm_table`(`caseid`, `title`, `registered_date`, `score`, `case_details`, `assign_policeid`, `Station_id`, `AccustName`) VALUES ('$caseid','$accussion',sysdate(),'$sc','$case_det','$p_id','$s_id','$accust')";


if ($conn->query($sql) === TRUE) {
    echo "The record is added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>