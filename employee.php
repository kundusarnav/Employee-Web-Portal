<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style>
        {box-sizing: border-box}
body {
  font-family: Verdana, sans-serif;
  margin:0;
  width:100%;
  }
.slideshow-container {
  width: 50%;
  height: 50%;
  margin: auto;
}
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
.next {
  right: 5%;
  border-radius: 3px 0 0 3px;
}
.prev{
  left: 22%;
  border-radius: 3px 0 0 3px;
}
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 35%;
}
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  margin-top: 250px;
}
.active {
  background-color: #717171;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
  .p1{
  background-color: blue;
  border-radius: 5px;
  padding: 20px;
  height:120px;
  margin-left: 5px;
  margin-right: 5px;
  margin-top: 5px;
            } 
        #a1{
            height: 125px;
            width: 250px;
            float: left;
            opacity: 1;
        }
.dropbtn {
  background-color: yellow;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  float:right;
  margin-right:5px;
}
.dropbtn:hover{
  background-color: #2980B9;
}
.btn1 {
  background-color: yellow;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  float: right;
  margin-top:80px;
  margin-right:5px;
}
.btn1:hover{
  background-color: #2980B9;
}
.btn2 {
  width: auto;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.btn3 {
  background-color: yellow;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  float: right;
  margin-top:80px;
  margin-right:5px;
}
.btn3:hover{
  background-color: #2980B9;
}
.btn4 {
  background-color: yellow;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  float: right;
  margin-top:80px;
  margin-right:5px;
}
.btn4:hover{
  background-color: #2980B9;
}
.btn5 {
  background-color: yellow;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  float: right;
  margin-top:80px;
  margin-right:5px;
}
.btn5:hover{
  background-color: #2980B9;
}
.dropdown {
  margin-top:80px;
  float:right;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-top:80px;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown a:hover {background-color: blue;}
.show {display: block;}
#lm1 {
  border-radius: 5px;
  padding: 20px;
  width: 189px;
  float: left;
  margin-top: -5px;
  margin-left:5px;
}
#lm2 {
  border-radius: 5px;
  padding:20px;
  height: auto;
  width: 1047px;
  margin-top: -24px;
  float: right;
  margin-right: 5px;
  overflow: hidden;
  
}
#lm3 {
  border-radius: 5px;
  padding: 20px;
  float: left;
  width:189px;
  margin-top: 120px;
  margin-left:-230px;
}
#lm4 {
  border-radius: 5px;
  padding: 20px;
  float: left;
  height: 115px;
  width:189px;
  margin-top: 384px;
  margin-left:-230px;
}
#mySidenav a {
  position: absolute;
  top: 90%;
  bottom: 20px;
  left: -95px;
  transition: 0.2s;
  padding-top:0px;
  width: 120px;
  float: center;
  font-size: 18px;
  font-weight: bold;	
  color: white;
  border-radius: 0 5px 5px 0;
}
#mySidenav a:hover {
  left: 0;
}
#about {
  top: 10px;
  background-color: #4CAF50;
}
#current_day { background-color:yellow; font-weight: bold; }
#bis,#civil,#electrical,#mechanical,#telecom,#fire,#hr,#waghodia,#undera,#fn,#cp,#om,#Security,#notices,#mom{
  cursor:pointer;
}
.accordion2 {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 50%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}
.active2, .accordion2:hover {
  background-color: #ccc;
}
.panel2 {
  padding: 1px;
  background-color: white;
  width: 50%;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.type2 {
    border-radius: 50%;
    height: 110px;
    width: 110px;
    border: 5px solid green;
}
#i4{
  margin-top: 15px;
  margin-left:15px;
  height:80px;
  width: 80px;
}
.zoom {
  transition: 0.1s;
}
.zoom:hover {
  transform: scale(1.02); 
}
</style>
    </head>
    <body background="background.jpg">
    <script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $(".slideshow-container").show();
    $(".p2").hide();
    $("#sub").hide();
    $("#joint").hide();
    $("#waghodia2").hide();
    $("#undera2").hide();
    $("#n").hide();
    $("#home").hide();
    $("#award").hide();
    $("#events").hide();
  });
  $(".btn3").click(function(){
    $("#award").load("award.php").show();
    $(".slideshow-container").hide();
    $(".p2").hide();
    $("#sub").hide();
    $("#joint").hide();
    $("#waghodia2").hide();
    $("#undera2").hide();
    $("#n").hide();
    $("#home").hide();
    $("#events").hide();
  });
  $("#sub2").click(function(){
    $("#sub").load("sub.php").show();
    $(".p2").hide();
    $(".slideshow-container").hide();
    $("#joint").hide();
    $("#waghodia2").hide();
    $("#undera2").hide();
    $("#n").hide();
    $("#home").hide();
    $("#award").hide();
    $("#events").hide();
  });
  $("#joint2").click(function(){
    $("#joint").load("joint.php").show();
    $(".p2").hide();
    $(".slideshow-container").hide();
    $("#sub").hide();
    $("#waghodia2").hide();
    $("#undera2").hide();
    $("#n").hide();
    $("#home").hide();
    $("#award").hide();
    $("#events").hide();
  });
  $("#waghodia").click(function(){
    $("#waghodia2").load("waghodia.php").show();
    $(".p2").hide();
    $("#bis2").hide();
    $(".slideshow-container").hide();
    $("#sub").hide();
    $("#joint").hide();
    $("#undera2").hide();
    $("#n").hide();
    $("#home").hide();
    $("#award").hide();
    $("#events").hide();
  });
  $("#undera").click(function(){
    $("#undera2").load("undera.php").show();
    $(".p2").hide();
    $(".slideshow-container").hide();
    $("#sub").hide();
    $("#joint").hide();
    $("#waghodia2").hide();
    $("#n").hide();
    $("#home").hide();
    $("#award").hide();
    $("#events").hide();
  });
  $(".btn4").click(function(){
    $("#n").load("notices.php").show();
    $("#undera2").hide();
    $(".p2").hide();
    $(".slideshow-container").hide();
    $("#sub").hide();
    $("#joint").hide();
    $("#waghodia2").hide();
    $("#home").hide();
    $("#award").hide();
    $("#events").hide();
  });
  $(".btn5").click(function(){
    $("#events").load("events.php").show();
    $("#undera2").hide();
    $(".p2").hide();
    $(".slideshow-container").hide();
    $("#sub").hide();
    $("#joint").hide();
    $("#waghodia2").hide();
    $("#home").hide();
    $("#award").hide();
    $("#n").hide();
  });
});
</script>
        <div class="p1">
            <img src="logo.png" id="a1">
            <div><button class="btn3">Awards & Achievements</button></div>
        <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Local Offices</button>
                <div id="myDropdown" class="dropdown-content">
                  <a id="waghodia">Waghodia</a>
                  <a id="undera">Undera</a>
                </div></div>
                <div class="dropdown">
                <button onclick="myFunction4()" class="dropbtn">Clients</button>
                <div id="myDropdown4" class="dropdown-content">
                  <a id="sub2" style="cursor:pointer">Subsiduaries</a>
                  <a id="joint2" style="cursor:pointer">Joint Ventures/Associates</a>
                </div></div>
                <div><button class="btn1">Gallery</button></div>
                <div><button class="btn4">Notices</button></div>
                <div><button class="btn5">Events</button></div>
              <div class="dropdown">
              <button onclick="myFunction3()" class="dropbtn">Departments</button>
                <div id="myDropdown3" class="dropdown-content">
                <a href="hr.php">Human Resource</a>
                <a href="bis.php">Business Information System</a>
                <a href="fn.php">Finance & Accounts</a>
                <a href="om.php">Operations & Maintenance</a>
                <a href="cp.php">Contract & Procurement</a>
                <a href="civil.php">Civil</a>
                <a href="mechanical.php">Mechanical</a>
                <a href="electrical.php">Electrical</a>
                <a href="telecom.php">Telecommunication</a>
                <a href="fire.php">Fire & Safety</a>
                <a href="Security.php">Security</a>
              </div></div>
                </div><br/>
                <div id="lm1" style="background-color:rgb(255,255,255,0.7)">
                <a href="search.php"><button class="btn2">Search for employees</button></a>
                </div><br/>
                <div id="lm2" style="background-color: rgb(255,255,255,0.7)">
                <div id="sub" style="display:none"></div>
                <div id="joint" style="display:none"></div>
                <div id="waghodia2" style="display:none"></div>
                <div id="undera2" style="display:none"></div>
                <div id="n" style="display:none"></div>
                <div id="award" style="display:none"></div>
                <div id="events" style="display:none"></div>
                <div id="home" align="justify">
                <br/><div class="zoom" style="margin-left:575px; margin-bottom:40px"><img src="vision.jpg" style="height:500px; width:450px"></div>
                <div style="margin-left:5px; margin-top:-520px">
                <h1 style="margin-left:20px">Vision<hr color="blue" style="margin-left:2px; width:10%"/></h1>
  <p style="margin-left:20px; margin-right:500px">
  To be the leading company in Natural Gas and Beyond, with
  Global Focus, Committed to Customer Care, Value Creation
  for all Stakeholders and Environmental Responsibility.<br/><br/></p>
<button class="accordion2" style="background-color: rgb(255,255,255,0.7)">Ethics</button>
<div class="panel2" style="background-color: rgb(255,255,255,0.15)">
<pre>
<div style="float:left; margin-top:30px" class="type2"><img id="i4" src="ethics.jpg" style="float:center"></div>
</pre>
<div style="margin-left:10%;">
<h2 style="margin-left:17%">Ethics
<hr color="blue" style="margin-left:2px; width:20%"/></h2>
  <p align="justify" style="margin-left:17%; margin-right:20px; font-family:times new roman">We are transparent, fair and consistent
    in dealing with all people. We insist on
    honesty, integrity and trustworthiness in
    all our activities.</p></div>
</div>
<button class="accordion2" style="background-color: rgb(255,255,255,0.7)">Customer</button>
<div class="panel2" style="background-color: rgb(255,255,255,0.15)">
<pre>
<div style="float:left; margin-top:30px" class="type2"><img id="i4" src="customer.jpg" style="float:center"></div>
</pre>
<div style="margin-left:10%;">
<h2 style="margin-left:17%">Customer
<hr color="blue" style="margin-left:2px; width:32%"/></h2>
<p align="justify" style="margin-left:17%; margin-right:20px; font-family:times new roman">We strive relentlessly to exceed the expectations
 of our customers, both internal and external. Our
     customers prefer us.</p></div>
</div>
<button class="accordion2" style="background-color: rgb(255,255,255,0.7)">People</button>
<div class="panel2" style="background-color: rgb(255,255,255,0.15)">
<pre>
<div style="float:left; margin-top:30px" class="type2"><img id="i4" src="people.jpg" style="float:center"></div>
</pre>
<div style="margin-left:10%;">
<h2 style="margin-left:17%">People
<hr color="blue" style="margin-left:2px; width:22%"/></h2>
<p align="justify" style="margin-left:17%; margin-right:20px; font-family:times new roman">We believe our success is driven by the commitment
and excellence of our people. We attract and retain
    result-oriented people who are proud their work and
    are satisfied with nothing less than the very best in
    everything they do. We encourage individual initiative
    by creating opportunities for our people to learn
    and grow. We respect the individual rights and dignity
    of all people.</p></div>
</div>
<button class="accordion2" style="background-color: rgb(255,255,255,0.7)">Shareholders</button>
<div class="panel2" style="background-color: rgb(255,255,255,0.15)">
<pre>
<div style="float:left; margin-top:30px" class="type2"><img id="i4" src="shareholders.jpg" style="float:center"></div>
</pre>
<div style="margin-left:10%;">
<h2 style="margin-left:17%">Shareholders
<hr color="blue" style="margin-left:2px; width:45%"/></h2>
<p align="justify" style="margin-left:17%; margin-right:20px; font-family:times new roman">We meet the objectives of our shareholders by providing them
  superior returns and value through their investments in us.</p></div>
</div>
<button class="accordion2" style="background-color: rgb(255,255,255,0.7)">Safety, Health and Environment</button>
<div class="panel2" style="background-color: rgb(255,255,255,0.15)">
<pre>
<div style="float:left; margin-top:30px" class="type2"><img id="i4" src="safety.png" style="float:center"></div>
</pre>
<div style="margin-left:10%;">
<h2 style="margin-left:17%; margin-right:20px">Safety, Health and Environment
<hr color="blue" style="margin-left:2px; width:98%"/></h2>
  <p align="justify" style="margin-left:17%; margin-right:20px; font-family:times new roman">  We promote highest levels of safety in our operations, health of
  our employees and a clean environment. We strive for continuous
  development of the communities in which we operate.</p></div>
</div>
<button class="accordion2" style="background-color: rgb(255,255,255,0.7)">Technology</button>
<div class="panel2" style="background-color: rgb(255,255,255,0.15)">
<pre>
<div style="float:left; margin-top:30px" class="type2"><img id="i4" src="technology.jpg" style="float:center"></div>
</pre>
<div style="margin-left:10%;">
<h2 style="margin-left:17%">Technology
<hr color="blue" style="margin-left:2px; width:38%"/></h2>
<p align="justify" style="margin-left:17%; margin-right:20px; font-family:times new roman">  We believe technology is the key to the future success of our
  organisation. We advocate use of 'best-in-class' technologies.</p></div>
</div>
</div>
</div>
<script>
var acc = document.getElementsByClassName("accordion2");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active2");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
                <div class="slideshow-container" style="display:none">
<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="download.jpg" style="width:100%; height:100%">
  <div class="text">Caption One</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="image2.jpg" style="width:100%; height:100%">
  <div class="text">Caption Two</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="image3.jpg" style="width:100%; height:100%">
  <div class="text">Caption Three</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="image.jpg" style="width:100%; height:100%">
  <div class="text">Caption Four</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="image5.jpg" style="width:100%; height:100%">
  <div class="text">Caption Five</div>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
</div>
                <div id="lm3" style="background-color: rgb(255,255,255,0.7)">
                <p>&nbsp</p>
<div id="mySidenav">
<iframe name="right_side" src="calendar.php" width="100%" height="100%" frameBorder="0"></iframe>
</div></div><br/>
<div id="lm4" style="background-color: rgb(255,255,255,0.7)">
<div style="float:center">
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("vadodara",$con);
if($con)
{
  function birthday_today() {
    $result = mysql_query("SELECT FirstName,LastName FROM vadodara WHERE MONTH(DOB) = MONTH(NOW()) AND DAY(DOB) = DAY(NOW()) ORDER BY FirstName ASC");
    $users = array();
    while ($row = mysql_fetch_assoc($result))
        $users[] = $row['FirstName']." ".$row['LastName'];
    return $users;
}
if(!birthday_today())
{
  echo"<br><center>"."<b><marquee direction='up' scrollamount='2'>No birthdays today!</marquee></b>"."</center>"."<br/>";
}
else
{
echo"<br><marquee direction='up' scrollamount='2'><center>"."<b>Today's birthdays</b>"."</center>";
$ul = "<ul>";
foreach(birthday_today() as $username)
    $ul .= "<li><a href='#d4'>$username</a></li>";
$ul .= "</ul>";
echo $ul;
echo"</marquee><br/>";
}
}
mysql_close($con);
?>
</div>
</div>
               <script>
              function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
              }
              window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                  var dropdowns = document.getElementsByClassName("dropdown-content");
                  var i;
                  for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                      openDropdown.classList.remove('show');
                    }
                  }
                }
              }
              function myFunction2() {
                document.getElementById("myDropdown2").classList.toggle("show");
              }
              window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                  var dropdowns = document.getElementsByClassName("dropdown-content");
                  var j;
                  for (j = 0; j < dropdowns.length; j++) {
                    var openDropdown = dropdowns[j];
                    if (openDropdown.classList.contains('show')) {
                      openDropdown.classList.remove('show');
                    }
                  }
                }
              }
              function myFunction3() {
                document.getElementById("myDropdown3").classList.toggle("show");
              }
              window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                  var dropdowns = document.getElementsByClassName("dropdown-content");
                  var j;
                  for (j = 0; j < dropdowns.length; j++) {
                    var openDropdown = dropdowns[j];
                    if (openDropdown.classList.contains('show')) {
                      openDropdown.classList.remove('show');
                    }
                  }
                }
              }
              function myFunction4() {
                document.getElementById("myDropdown4").classList.toggle("show");
              }
              window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                  var dropdowns = document.getElementsByClassName("dropdown-content");
                  var j;
                  for (j = 0; j < dropdowns.length; j++) {
                    var openDropdown = dropdowns[j];
                    if (openDropdown.classList.contains('show')) {
                      openDropdown.classList.remove('show');
                    }
                  }
                }
              }
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
showSlides(slideIndex += n);
}
function currentSlide(n) {
showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
              </script>
    </body>
</html>