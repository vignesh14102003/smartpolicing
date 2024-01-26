<!DOCTYPE html>
<html>
<style>
p,button,input{
font-family:Arial;letter-spacing:3px;
}
button {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  background-color: white;
  color: black;
}
h2{
font-family:Arial;letter-spacing:3px;
}
hr{
border:1px solid black;
}
.box{
border:1px solid transaprent;height:450px;width:50%;margin-top:50px;padding-top:18px;
}
.box:hover{
box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;padding-top:18px;
}
</style>
<body>
<center>
<div class="box">
<h2>Choose!</h2><hr>
<?php $pid = $_GET['pid'] ?>
<p><button onclick="location.href='case_input.php'">To File New Case</button></p>
<p><button onclick="location.href='pending.php'">Pending Cases</button></p>
<p><button onclick="location.href='solved.php'">Solved Cases</button></p>
<p><button onclick="location.href='userview.php?pid=<?php echo $pid; ?>'">Users P&S</button></p>
<p><button onclick="location.href='RegisterStation.php'">Register Station</button></p>
<p><button onclick="location.href='RegisterPolice.php'">Register Police</button></p>

</div>
</center>
</body>
</html>