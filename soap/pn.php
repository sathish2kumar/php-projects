<html>

<head>
<style>
#id1{
      background-color:green;
      position: absolute;
      right: 150px;
      top: 20px;
      color: white;
      padding: 15px 32px;
}

#id2{
      background-color:green;
      position: absolute;
      right: 10px;
      top: 20px;
      color: white;
      padding: 15px 32px;
}
#id3{
      background-color:green;
      position: absolute;
      left: 10px;
      top: 135px;
      color: white;
      padding: 15px 32px;
}
#id4{
      background-color:green;
      position: absolute;
      right: 10px;
      top: 135px;
      color: white;
      padding: 15px 32px;
}
#id1:hover {
    background-color: black;
   }
#id2:hover {
    background-color: black;
}
#id3:hover {
    background-color: black;
   }
#id4:hover {
    background-color: black;
}
#bl{
    height:60px;
    width:1260px;   
    background-color:red;
    border-style: inset;
    border-style: outset;
}
#bl1{
    height:150px;
    width:1260px;   
    border-style: inset;
    border-style: outset;
}
#bl2{
      position: absolute;
      background-color:#000000;
      color:white;
      opacity: 0.6;
      right:450px;
      top: 235px;
      border-color: white;
      padding: 125px 100px;
      border-style: solid;
}
#bl3{
      background-color:#000000;
      opacity: 0.6;
      color:white;
      position: absolute;
      right:440px;
      top: 235px;
      border-color:white;
      padding: 98px 90px;
      border-style: solid;
}
#bl4{
      background-color:#000000;
      color:white;
      opacity: 0.6;
      position: absolute;
      left:10px;
      top: 235px;
      border-color: white;
      padding: 77px 130px;
      border-style: inset;
      border-style: outset;
}
#bl5{
      background-color:Gray;
      opacity: 0.7;
      color:white;
      position: absolute;
      border-color: blue;
      top: 641px;
      height:50px;
      width:1260px;
      border-style: solid;
}
#bl6{
      background-color:#000000;
      opacity: 0.6;
      color:#000000;
      position: absolute;
      right:10px;
      top: 235px;
      border-color: white;
      padding: 195px 265px;
      border-style: inset;
      border-style: outset;
}
#bl7{
      position: absolute;
      background-color:#000000;
      color:white;
      opacity: 0.6;
      right:450px;
      top: 235px;
      border-color: white;
      padding: 125px 100px;
      border-style: solid;
}
#tab
{
    position: absolute;
    right:230px;
    top: 335px;
    border:
}
body{
  background-image: url("imgg.jpg");
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: 1260px 500px;
  
}
.mySlides {display:none;}

</style>

<div id="bl">
<center>

<h2>AASAI SOAP</h2>

<button id="id1"  onclick="login()">LOGIN</button>
<button id="id2"  onclick="register()">REGISTER</button>
</div>
<div id="bl1">
  <img class="mySlides" src="img1.png" height="150" width="1260">
  <img class="mySlides" src="img.png"  height="150" width="1260">
  <button id="id3" onclick="plusDivs(1)">PRE</button>
  <button id="id4" onclick="plusDivs(1)">NEXT</button>
</div>
</head>
<script>
var slideIndex =1;
showDivs(slideIndex);
function plusDivs(n) {
  
  showDivs(slideIndex += n);
}
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
function login() {
    document.getElementById("bl2").style.display = "block";
    document.getElementById("bl3").style.display = "none";
    document.getElementById("bl4").style.display = "none";
    document.body.style.backgroundImage = "none"; 
    document.body.style.backgroundImage = "url('imgg1.jpg')";
    document.getElementById("bl6").style.display = "none";
    document.getElementById("tab").style.display = "none"; 
}  
function register() {
    
    document.getElementById("bl3").style.display = "block";
    document.getElementById("bl2").style.display = "none";
    document.getElementById("bl4").style.display = "none";
    document.getElementById("bl6").style.display = "none"; 
    document.getElementById("tab").style.display = "none"; 
}
function calculate()
{
    document.getElementById("bl6").style.display = "block";
   
    document.getElementById("bl6").innerHTML = "hello";
}
function loginfail() 
{
    document.getElementById("f1").style.display = "none";
    document.getElementById("bl2").innerHTML = "login failed!click back button again login!";
    document.getElementById("bl2").style.padding = "185px 100px";

}

</script>

<body  background-image="imgg.jpg">


<div id="bl2"  style="display:none">

<form  action="lo.php" method="POST" id="f1">
<p>LOGIN FORM<P>

USERNAME:
<input type="text" name="sn"></br>

PASSWORD:
<input type="text" name="seg"></br>

<input type="submit" value="LOGIN"  style="heignt:5px;width:195px;background-color:green;">


</form>
</div>
<div id="bl3" style="display:none">
<form action="re.php" method="POST" >
<br>
USERNAME:
<input type="text" name="sn"></br>
<br>
DESTIGANATION:
<input type="text" name="des"></br>
<br>
PASSWORD:
<input type="text" name="seg"></br>
<br>
<input type="submit" style="heignt:5px;width:195px;background-color:red;opacity:1" value="REGISTER"></br></form>

</form>

</div>
<div id="bl4">
<p>SOAP CALCULATER</P>

<form action="calcu.php" method="POST" >

SoapBox:
<input type="text" name="s1" ></br>
clinicPoweder:
<input type="text" name="s2"></br></label>
washingPoweder:
<input type="text" name="s3"></br>
Manjal:
<input type="text" name="s4"></br>
Pathi:
<input type="text" name="s5"></br>
Tthul:
<input type="text" name="s6"></br>

<input type="submit" style="heignt:5px;width:195px;background-color:red;opacity:1" value="CALCULATE"></br></form>

</div>
</body>

<footer>

<div id="bl5">
<table align="center"><tr><th>About as</th><th>contact as</th></tr></table>
</div>
<div id="bl6" style="display:none">
</div>
</footer>
</html>

