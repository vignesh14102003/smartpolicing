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

<form action="algorithm1.php" method="post">

<table width="700" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td><p>Enter the case id:</p></td>
    <td> <input type="text" name="caseid"></td>
  </tr>
  <tr>
    <td><p>Enter the case title: </p></td>
    <td><input type="text" name="accussion"></td>
  </tr>
  <tr>
    <td><p>Enter the accust name: </p></td>
    <td> <input type="text" name="accust"></td>
  </tr>
    <tr>
    <td><p>Case Assigned to (Police ID): </p></td>
    <td> <input type="text" name="p_id"></td>
  </tr>
    <tr>
    <td><p>Case Filed in (Station ID): </p></td>
    <td> <input type="text" name="s_id"></td>
  </tr>
<tr>
    <td><p>Enter the case details:</p></td>
    <td> <textarea name="case_det">Enter the case details  </textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><br><button> Submit </button></td>
  </tr>
</table>

</form>

</body>

</html>

