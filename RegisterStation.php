<!DOCTYPE html>
<html>
<head>
    <title> Accust Details </title>
<style>
button:hover{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  background-color: white;
  color: black;
}

button{
  background-color: grey;
  border: none;
  color: white;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  height: 60px;
  width: 307px;
  
}

p{
  color: black;
  font-family: "Inknut Antiqua-Regular", Helvetica;
  font-size: 24px;
  font-weight: 400;
  left: 58px;
  letter-spacing: 0;
  line-height: normal;
}

input,textarea{
  background-color: #ffffff;
  border: 1px solid;
  border-color: #000000;
  height: 35px;
  font-size: 20px;
  position: absolute;
  
  width: 276px;
}
</style>
</head>

<body>

<form action="" method="post">

<table width="600" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td><p>Enter the Station ID:</p></td>
    <td> <input type="text" name="stationid"></td>
  </tr>
  <tr>
    <td><p>Enter the Station Name: </p></td>
    <td><input type="text" name="s_name"></td>
  </tr>
  <tr>
    <td><p>Located in: </p></td>
    <td> <input type="text" name="location"></td>
  </tr>
    <tr>
    <td><p>Area Under Control: </p></td>
    <td> <input type="text" name="a_control"></td>
  </tr>  <tr>
    <td><p>Size fo the station: </p></td>
    <td> <input type="text" name="s_size"></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><br><button> Submit </button></td>
  </tr>
</table>

</form>

<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "copwebsite";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $stationid = $_POST['stationid'];
            $s_name = $_POST['s_name'];
            $location = $_POST['location'];
            $a_control = $_POST['a_control'];
            $s_size = $_POST['s_size'];

            $sql = "INSERT INTO `station_det`(`stationID`, `name`, `place`, `Area`, `size`) VALUES ('$stationid','$s_name','$location','$a_control','$s_size');";

            $result = $conn->query($sql);
            if ($result) {
                echo "The record is saved";

            }
            else{
              echo "There is some error";
            }
          }
            ?>

</body>

</html>

