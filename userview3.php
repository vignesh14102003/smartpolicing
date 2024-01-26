<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <script>
        function dsttc(caseid, title, AccustName, case_details) {
            document.getElementById("data").innerHTML = '<h2>Case ID: ' + caseid.toString() + '</h2><br><br><p><<<<<<<<<<<<<<<< Case Details >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><br><br>Title: ' + title + '<br><br>Accust Name: ' + AccustName + '<br><br>Case Details: ' + case_details + '<br><br><button onclick="edit()">Edit</button> ';
        }

        function edit() {
            document.getElementById("data").innerHTML = '<form action="" method="post"><table width="700" border="0" cellspacing="1" cellpadding="1">  <tr> <td><p>Enter the case id:</p></td> <td> <input type="text" name="caseid"></td> </tr> <tr> <td><p>Enter the case title: </p></td> <td><input type="text" name="accussion"></td> </tr> <tr> <td><p>Enter the accust name: </p></td> <td> <input type="text" name="accust"></td></tr><tr><td><p>Enter the case details:</p></td><td> <textarea name="case_det">Enter the case details  </textarea></td></tr><tr><td>&nbsp;</td><td><br><input type="submit" name="submit" value="save" / ></td></tr></table></form>';
        }

        document.addEventListener("DOMContentLoaded", function () {
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        });
    </script>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "copwebsite";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $caseid = $_POST['caseid'];
        $title = $_POST['accussion'];
        $AccustName = $_POST['accust'];
        $case_det = $_POST['case_det'];

        $sql2 = "INSERT INTO `algorithm_table`(`caseid`, `title`, `case_details`, `AccustName`) VALUES ('$caseid','$title','$case_det','$AccustName');";
        $result2 = $conn->query($sql2);

        if ($result2) {
            ?>
            <script>
                dsttc('<?php echo $caseid; ?>','<?php echo $title; ?>','<?php echo $AccustName; ?>','<?php echo $case_det; ?>');
            </script>
        <?php
        } else {
            echo "Error: " . $sql2 . "<br>" . $conn->error;
        }
    }
    ?>
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

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .faqAns {
            color: black;
            font-size: 14px;
            letter-spacing: 3px;
            font-weight: normal;
            font-family: arial;
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

        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            letter-spacing: 3px;
            width: 100%;
            border: none;
            font-family: Arial;
            text-align: left;
            outline: none;
            font-size: 18px;
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: #ccc;
        }

        .active:after {
            content: "\2212";
        }

        .accordion:after {
            content: '\002B';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
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
            <p class="topName">Police Stations</p>
        </div>
    </center>
    <div class="detail" id="data">
        <h2></h2>
        <p></p>
    </div>
    <div class="overall">
        <div class="intro">
            <p class="introText">The following Cases are assigned to you</p>
        </div>
        <div class="academies">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "copwebsite";

            $pid = $_GET['pid'];

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            ?>
            <button class="accordion"> Pending Cases </button>
            <div class="panel">
                <?php
                $sql2 = "SELECT * FROM `algorithm_table` WHERE `assgn_policeid`='$pid' AND `solved`='N';";

                $result2 = $conn->query($sql2);
                if ($result2->num_rows > 0) {
                    while ($row2 = $result2->fetch_assoc()) {
                ?>
                        <p class="faqAns" onclick="dsttc('<?php echo $row2['caseid']; ?>','<?php echo $row2['title']; ?>','<?php echo $row2['AccustName']; ?>','<?php echo $row2['case_details']; ?>')" id="c_id"><br><?php echo $row2['caseid'];  ?></p>
                <?php
                    }
                }
                ?>
            </div>

            <button class="accordion"> Completed Cases </button>
            <div class="panel">
                <?php
                $sql2 = "SELECT * FROM `algorithm_table` WHERE `assgn_policeid`='$pid' AND `solved`='Y';";

                $result2 = $conn->query($sql2);
                if ($result2->num_rows > 0) {
                    while ($row2 = $result2->fetch_assoc()) {
                ?>
                        <p class="faqAns" onclick="dsttc('<?php echo $row2['caseid']; ?>','<?php echo $row2['title']; ?>','<?php echo $row2['AccustName']; ?>','<?php echo $row2['case_details']; ?>')" id="c_id"><br><?php echo $row2['caseid'];  ?></p>
                <?php
                    }
                }
                ?>
            </div>

        </div>
    </div>
</body>

</html>
