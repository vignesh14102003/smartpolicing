<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <script>
        function dsttc(Name,userid,stationID,designation,salary,age) {

            document.getElementById("data").innerHTML = '<h2>User ID: ' +userid+ '</h2><br><br><p><<<<<<<<<<<<<<<< Police Details >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><br><br>Name: '+Name+'<br><br>station ID: '+stationID+'<br><br>Designation: '+designation+'<br><br>Salary: '+salary.toString()+'<br><br>Age: '+age.toString();
        }

       
    </script>
    <style>
        .overall {
            height: 800px;
            width: 50%;
            margin-top: 70px;
            margin-left: 30px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-bottom: 50px;
        }

        .intro {
            height: 100px;
            width: 100%;
        }

        .introText {
            font-size: 17px;
            font-family: Arial;
            letter-spacing: 3px;
            float: left;
            margin-left: 20px;
            margin-top: 12px;
        }

        .academies {
            height: 600px;
            width: 90%;
            float: left;
            padding-left: 35px;
        }

        .c1,
        .c2,
        .c3,
        .c4,
        .c5,
        .c5,
        .c6,
        .c7,
        .c8 {
            height: 60px;
            width: 99%;
            border: 2px solid transparent;
            margin-top: 14px;
            background-color: #b4b4b4;
        }

        .c1:hover,
        .c2:hover,
        .c3:hover,
        .c4:hover,
        .c5:hover,
        .c5:hover,
        .c6:hover,
        .c7:hover,
        .c8:hover {
            background-color: #f0f0f0;
            color: black;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        }

        .detail {
            float: right;
            height: 550px;
            width: 45%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-top: 160px;
        }

        h2 {
            font-family: Arial;
            letter-spacing: 3px;
            text-align: center;
        }

        p {
            font-family: Arial;
            letter-spacing: 3px;
            text-align: left;
            margin: 30px;
        }

        .aname {
            font-family: Arial;
            font-size: 16px;
            letter-spacing: 3px;
            text-align: left;
            text-align: center;
            margin: 1px;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            text-decoration: underline;
            color: red;
        }

        .heading {
            border: 2px solid transparent;
            width: 50%;
            height: 110px;
            font-family: "Audiowide", sans-serif;
            font-size: 32px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            margin-top: 40px;
            background-color: rgb(180, 180, 180);
        }

        .topName {
            font-family: "Audiowide", sans-serif;
            font-size: 32px;
            text-align: center;
        }
    </style>
</head>

<body>
    <center>
        <div class="heading">
            <p class="topName">Police Details</p>
        </div>
    </center>
    <div class="detail" id="data">
        <h2></h2>
        <p></p>
    </div>
    <div class="overall">
        <div class="intro">
            <p class="introText">The following police are under your control</p>
        </div>
        <div class="academies">
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
            $sql = "SELECT * FROM `user_det`;";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="c1" onclick="dsttc('<?php echo $row['Name']; ?>','<?php echo $row['user_id']; ?>','<?php echo $row['Station_id']; ?>','<?php echo $row['Designation']; ?>','<?php echo $row['salary']; ?>','<?php echo $row['age']; ?>')" id="c_id">
                        <p class="aname" id="data"><br><?php echo $row['Name'];  ?></p>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    </div>
</body>

</html>
