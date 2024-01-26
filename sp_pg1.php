/*<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
<style>
.mySlides {display:none;}
.overall{
height:2400px;
width:80%;
position:static;
margin:30px;
box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
ul {
  list-style-type: none;
  margin: 0;
  font-family: "Audiowide", sans-serif;
  font-weight:bold;
  font-size:26px;
  padding: 20px;
  color:white;
  overflow: hidden;
  background-color: transparent;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  color:red;
}
p{
float:left;
color:white;
padding-left:30px;
font-weight:bold;
font-family: "Audiowide", sans-serif;
font-size:32px;
}
.header_intro{
height:900px;
background-image:url("cop.jpg");
background-size:cover;
background-repeat:no repeat;
}
.slogan_intro{
font-family:Papyrus;letter-spacing:3px;padding-top:370px;
}
.about{
height:250px;font-family:Verdana;
}
h2{
font-family:Verdana;text-decoration:underline;
}
.about_text{
color:black;font-size:18px;font-weight: normal;text-align:left;letter-spacing:3px;font-family:verdana;
}
.academies{
height:400px;
background-image:url("tamil_nadu_police.avif");
background-attachment: fixed;background-size:cover;background-repat:no repeat;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}
.contact{
height:250px;
}
.testimonials{
height:430px;width:100%;box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
}
.t1,.t2{
margin:10px;
height:170px;width:96%;

background-color:#f0f0f0;
}
.t1p,.t2p{
color:black;font-family:Arial;font-size:18px;letter-spacing:3px;font-weight:normal;text-align:left;
}
.name{
text-align:right;color:black;font-family:Arial;font-size:18px;letter-spacing:3px;font-weight:bold;
}
.faq{
height:400px;
}
.ques{
border:2px solid blue;
height:45px;margin:3px;
}
.ques_{
color:black;letter-spacing:3px;font-family:Arial;font-size:20px;
}
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  letter-spacing:3px;
  width: 100%;
  border: none;
  font-family:Arial;
  text-align: left;
  outline: none;
  font-size: 18px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.faqAns{
color:black;
font-size:14px;
letter-spacing:3px;
font-weight:normal;
font-family:arial;
}
.footer{
height:200px;width:50%;margin-top:20px;
background-color:black;
box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
.footer1{
height:100%;width:350px;float:left;color:white;
}
.footer2{
height:100%;width:200px;float:right;color:white;
}
.mission{
color:white;
font-family:Arial;
letter-spacing:3px;
font-size:14px;
font-weight:normal;
text-align:left;
}
a{
text-decoration:none;color:white;
}
a:hover{
font-weight:bold;color:red;text-decoratiom:underline;
}
html{
scroll-behavior:smooth;
}

</style>
<body>
<center>
<div class="overall">
<div class="header_intro">
<p>Chennai Smart Police </p>
<ul>

  <li><a href="#about">About</a></li>
</ul>
</div>
<div class="about" id="about">
<h2>About</h2>
<p class="about_text">The Greater Chennai Police, a division of the Tamil Nadu Police, is the law enforcement agency for the city of Chennai in India and the surrounding area. The city police force is headed by a Commissioner of Police and the administrative control vests with the Tamil Nadu Home Department </p>
</div>
<div class="academies" id="academies">
<br><br><br><br><br><br><br><br><button class="button button3" onclick="location.href='police_hierarchy.php'">Log In >></button>
</div>
<div class="contact" id="contact">
<h2>Contact for technical issues</h2>
<p class="about_text">Mr S Jayaseelan<br>Email: chennaismartpolicing@gmail.com<br><br>Our team is happy to assist you with any need. Kindly send an email and we'll get back to you. If you want have a telephonic call, we can schedule with it during the weekend. </p>
</div>


<div class="faq" id="faq">
<h2>F A Q</h2>
<button class="accordion">Is technical service available for 24/7?</button>
<div class="panel">
  <p class="faqAns">Yes, it is available 24/7.</p>
</div>

<button class="accordion">Whether this app provide suggestions to improve the speed of my work?</button>
<div class="panel">
  <p class="faqAns">It is still in the development phase, actually it is the soul purpose of creating it.</p>
</div>
<button class="accordion">Whether the app supports all platforms?</button>
<div class="panel">
  <p class="faqAns">Yes, it would.</p>
</div>
<button class="accordion">Why we are getting otp in E-mail?</button>
<div class="panel">
  <p class="faqAns">It is under progress to send otp in sms.</p>
</div>
<div class="footer">
<div class="footer1">
<h2>Mission</h2>
<p class="mission">Our mission is to provide you with the updated information about table tennis academies in Chennai. We also will update results of Chennai players participating in Zonal/National Tournament.</p>
</div>
<div class="footer2">
<p class="mission"><a href="#faq">F A Q</a><br><br><br><br><a href="#contact">Contact</a><br><br><br><br><a href="#academies">Academies</a></p>
</div>
<div class="footer3"></div>
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

function dsttc(Name,userid,stationID,designation,salary,age) {

            document.getElementById("data").innerHTML = '<h2>User ID: ' +userid+ '</h2><br><br><p><<<<<<<<<<<<<<<< Police Details >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><br><br>Name: '+Name+'<br><br>station ID: '+stationID+'<br><br>Designation: '+designation+'<br><br>Salary: '+salary.toString()+'<br><br>Age: '+age.toString();
        }
</script>

</div>
</div>
</center>
</body>
</html>
