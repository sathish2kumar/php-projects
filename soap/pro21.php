<!doctype html>
<html>
<head>

<style>
#bl{
    height:60px;
    width:1260px;   
    background-color:red;
    border-style: inset;
    border-style: outset;
}
#id1{
      background-color:#000000;
      opacity: 0.6;
      position: absolute;
      left: 190px;
      top: 55px;
      color: white;
      padding: 125px 92px;
      border-style: inset; 
      border-style: outset;
      border-width:10px;
}
#id2{
      background-color:#000000;
      opacity: 0.6;
      position: absolute;
      right: 190px;
      top: 55px;
      color: white;
      padding: 125px 92px;
      border-style: inset; 
      border-style: outset;
      border-width:10px;
}
#id3{
      background-color:#000000;
      opacity: 0.6;
      position: absolute;
      left: 190px;
      top: 365px;
      color: white;
      padding: 125px 92px;
      border-style: inset; 
      border-style: outset;
      border-width:10px;
}

#id4{
      background-color:#000000;
      opacity: 0.6;
      position: absolute;
      right: 190px;
      top: 365px;
      color: white;
      padding: 125px 92px;
      border-style: inset; 
      border-style: outset;
      border-width:10px;
}
#id5{
      background-color:#000000;
      opacity: 0.6;
      position: absolute;
      right: 400px;
      top: 65px;
      color: white;
      padding: 20px 20px;
      display:none;
}
#id6{
      background-color:red;
      opacity: 0.5;
      position: absolute;
      right: 20px;
      top: 315px;
      color: white;
      padding: 95px 102px;
      display:none;
}

#id7{
      background-color:green;
      position: absolute;
      left: 130px;
      top: 75px;
      color: white;
      padding: 20px 20px;
      display:none;
}
#b2{
      position: absolute;
      right: 10px;
      top:10px;
      display:none;
}
#b3{
      position: absolute;
      right: 40px;
      top:10px;
      display:none;
}
#b5{
      position: absolute;
      right: 10px;
      top:10px;
      display:none;
}
#b7{
      position: absolute;
      right: 10px;
      top:10px;
      
      display:none;
}
#b12{
      position: absolute;
      right: 10px;
      top:10px;
      display:none;
}
#f1{
      position: absolute;
      left:10px;
      top:130px;
      display:none;
}
#f2{
      position: absolute;
      right:10px;
      top:130px;
      display:none;
}
#f4{
      position: absolute;
      left:10px;
      top:120px;
      display:none;
}
#f5{
      position: absolute;
      left:10px;
      top:120px;
      display:none;
}
#f6{
      position: absolute;
      left:10px;
      top:120px;
      display:none;
}
</style>
</head>
<script>
function cal1() {
    

    document.getElementById("id2").style.display = "none"; 
    document.getElementById("id3").style.display = "none";
    document.getElementById("id4").style.display = "none";
    document.getElementById("b1").style.display = "none";
    document.getElementById("b2").style.display = "block";
    document.getElementById("b3").style.display = "block";
    document.getElementById("f1").style.display = "block";
    document.getElementById("id5").style.display = "block"; 
    document.getElementById("id1").style.padding = "285px 502px";
    document.getElementById("id1").style.top = "50px";
    document.getElementById("id1").style.left = "55px";
    document.getElementById("id1").style.border-style = "inset";
    document.getElementById("id1").style.border-style = "outset";
    document.getElementById("id1").style.border-width = "10px";
}
function cal2() {
    

    document.getElementById("id1").style.display = "none"; 
    document.getElementById("id3").style.display = "none";
    document.getElementById("id4").style.display = "none";
    document.getElementById("b4").style.display = "none";
    document.getElementById("b5").style.display = "block";
    document.getElementById("f3").style.display = "block";
    document.getElementById("id5").style.display = "block"; 
    document.getElementById("id2").style.padding = "125px 502px";
    document.getElementById("id2").style.top = "50px";
    document.getElementById("id2").style.left = "55px";
    document.getElementById("id2").style.border-style = "inset";
    document.getElementById("id2").style.border-style = "outset";
    document.getElementById("id2").style.border-width = "10px";
}
function cal3() {
    

    document.getElementById("id1").style.display = "none"; 
    document.getElementById("id2").style.display = "none";
    document.getElementById("id4").style.display = "none";
    document.getElementById("b6").style.display = "none";
    document.getElementById("b7").style.display = "block";
    document.getElementById("id7").style.display = "block";
    document.getElementById("id5").style.display = "block"; 
    document.getElementById("id3").style.padding = "285px 432px";
    document.getElementById("id3").style.top = "50px";
    document.getElementById("id3").style.left = "105px";
    document.getElementById("id3").style.border-style = "inset";
    document.getElementById("id3").style.border-style = "outset";
    document.getElementById("id3").style.border-width = "10px";
}
function cal4() {
    

    document.getElementById("id1").style.display = "none"; 
    document.getElementById("id2").style.display = "none";
    document.getElementById("id3").style.display = "none";
    document.getElementById("b11").style.display = "none";
    document.getElementById("b12").style.display = "block";
    document.getElementById("id5").style.display = "block"; 
    document.getElementById("id4").style.padding = "285px 432px";
    document.getElementById("id4").style.top = "50px";
    document.getElementById("id4").style.left = "105px";
    document.getElementById("id4").style.border-style = "inset";
    document.getElementById("id4").style.border-style = "outset";
    document.getElementById("id4").style.border-width = "10px";
}
function closing1() {
    document.getElementById("id2").style.display = "block"; 
    document.getElementById("id3").style.display = "block";
    document.getElementById("id4").style.display = "block";
    document.getElementById("b1").style.display = "block";
    document.getElementById("b2").style.display = "none";
    document.getElementById("b3").style.display = "none";
    document.getElementById("f1").style.display = "none";
    document.getElementById("f2").style.display = "none"; 
    document.getElementById("id5").style.display = "none"; 
    document.getElementById("id1").style.top = "55px";
    document.getElementById("id1").style.left = "190px";
    document.getElementById("id1").style.padding = "125px 92px";
    document.getElementById("id1").style.border-style = "inset";
    document.getElementById("id1").style.border-style = "outset";
    document.getElementById("id1").style.border-width = "10px";
}
function closing2() {
    document.getElementById("id1").style.display = "block"; 
    document.getElementById("id3").style.display = "block";
    document.getElementById("id4").style.display = "block";
    document.getElementById("b4").style.display = "block";
    document.getElementById("b5").style.display = "none";
    document.getElementById("f3").style.display = "none";
    document.getElementById("id5").style.display = "none";  
    document.getElementById("id2").style.padding = "125px 92px";
    document.getElementById("id2").style.top = "55px";
    document.getElementById("id2").style.left = "690px";
   
    document.getElementById("id2").style.border-style = "inset";
    document.getElementById("id2").style.border-style = "outset";
    document.getElementById("id2").style.border-width = "10px";
}
function closing3() {
    document.getElementById("id1").style.display = "block"; 
    document.getElementById("id2").style.display = "block";
    document.getElementById("id4").style.display = "block";
    document.getElementById("b6").style.display = "block";
    document.getElementById("b7").style.display = "none";
    document.getElementById("id5").style.display = "none";
    document.getElementById("id7").style.display = "none";
    document.getElementById("f6").style.display = "none";
    document.getElementById("f4").style.display = "none"; 
    document.getElementById("f5").style.display = "none" 
    document.getElementById("id3").style.padding = "125px 92px";
    document.getElementById("id3").style.top = "365px";
    document.getElementById("id3").style.left = "190px";
    document.getElementById("id3").style.border-style = "inset";
    document.getElementById("id3").style.border-style = "outset";
    document.getElementById("id3").style.border-width = "10px";

}
function closing4() {
    document.getElementById("id1").style.display = "block"; 
    document.getElementById("id2").style.display = "block";
    document.getElementById("id3").style.display = "block";
    document.getElementById("id5").style.display = "none";
    document.getElementById("b11").style.display = "block";
    document.getElementById("b12").style.display = "none";
    document.getElementById("id4").style.padding = "125px 92px ";
    document.getElementById("id4").style.top = "365px";
    document.getElementById("id4").style.left = "690px";
    document.getElementById("id4").style.border-style = "inset";
    document.getElementById("id4").style.border-style = "outset";
    document.getElementById("id4").style.border-width = "10px";
}
function viewcalc() {
    document.getElementById("f2").style.display = "block"; 
    document.getElementById("id6").style.display = "block";

}
function calculate() {
 document.getElementById("id6").innerHTML = "Paragraph changed!";
     
}
function week() {
    document.getElementById("f4").style.display = "block"; 
    document.getElementById("f6").style.display = "none"; 
    document.getElementById("f5").style.display = "none";
}
function month() {
    document.getElementById("f5").style.display = "block"; 
    document.getElementById("f6").style.display = "none"; 
    document.getElementById("f4").style.display = "none";
}
function year() {
    document.getElementById("f6").style.display = "block";
    document.getElementById("f4").style.display = "none"; 
    document.getElementById("f5").style.display = "none"; 
}
</script>
<body style="background-color:lightblue;">
<div id="id1">
<button id="b1" style="heignt:45px;width:195px;background-color:red;" onclick="cal1()">ORDER</button>
<button id="b2" onclick="closing1()">X</button>
<button id="b3" onclick="viewcalc()">view calc</button>
<form id="f1">
SoapBox:
<input type="text" name="s1" ></br>
WashingPoweder:
<input type="text" name="s2"></br></label>
ClinicPoweder:
<input type="text" name="s3"></br>
Manjal:
<input type="text" name="s4"></br>
Pathi:
<input type="text" name="s5"></br>
Tthul:
<input type="text" name="s6"></br>

<input type="submit" value="ORDER"></br></form>


<form id="f2" method="POST">
SoapBox:
<input type="text" name="s1" ></br>
WashingPoweder:
<input type="text" name="s2"></br></label>
ClinicPoweder:
<input type="text" name="s3"></br>
Manjal:
<input type="text" name="s4"></br>
Pathi:
<input type="text" name="s5"></br>
Tthul:
<input type="text" name="s6"></br>

<input type="submit" value="calculate" onclick="calculate()"></br></form>


<div id="id6"  style="display:none;">
</div>
</div>
<div id="id2">
<button id="b4" style="heignt:45px;width:195px;background-color:red;" onclick="cal2()">STORE DATA</button>
<button id="b5" onclick="closing2()">X</button>
<form id="f3" style="display:none;" method="POST" >
SoapBox:
<input type="text" name="s1" ></br>
WashingPoweder:
<input type="text" name="s2"></br></label>
ClinicPoweder:
<input type="text" name="s3"></br>
Manjal:
<input type="text" name="s4"></br>
Pathi:
<input type="text" name="s5"></br>
Tthul:
<input type="text" name="s6"></br>

<input type="submit" value="STORE"></br>
<?php
if(!isset($_POST['submit']))
{
 include 'co.php';
 $des="kothiparai";
 $s1=($_POST['s1']);
 $s2=($_POST['s2']);
 $s3=($_POST['s3']);
 $s4=($_POST['s4']);
 $s5=($_POST['s5']);
 $s6=($_POST['s6']);
 $day=date("Y/m/d");
 $query   = "INSERT into box (soap,clinic,washing,manjal,pathi,tthul,des,date) VALUES('" . $s1 . "','" . $s2 . "','" . $s3 . "','" . $s4 . "','" . $s5 . "','" . $s6 . "','" . $des . "','" . $day . "')";
 $r = $conn->query($query);


 $r1=$s1*510;
 $r2=$s1*510;
 $r3=$s1*240;
 $r4=$s1*150;
 $r5=$s1*100;
 $r6=$s1*180;
 
 $total=$r1+$r2+$r3+$r4+$r5+$r6;
  


}
?>
</form>

</div>
<div id="id3">
<button id="b6" style="heignt:45px;width:195px;background-color:red;" onclick="cal3()">ANALYSIS</button>
<button id="b7" onclick="closing3()">X</button>

<div id="id7">
<button id="b8" style="heignt:45px;width:195px;background-color:red;" onclick="week()">ONEWEEK</button>
<button id="b9" style="heignt:45px;width:195px;background-color:red;" onclick="month()">ONEMONTH</button>
<button id="b10" style="heignt:45px;width:195px;background-color:red;" onclick="year()">ONEYEAR</button>
<form id="f4">
DATE START:<input type="text" name="s1">END:<input type="text" name="s2"></br>
<input type="submit" value="STORE"></br></form>

<form id="f5">
MONTH1:<input type="text" name="s1">MONTH2:<input type="text" name="s2"></br>
<input type="submit" value="STORE"></br></form>

<form id="f6">
YEAR1:<input type="text" name="s1">YEAR2:<input type="text" name="s2"></br>
<input type="submit" value="STORE"></br></form>


</div>
</div>
<div id="id4">
<button id="b11" style="heignt:45px;width:195px;background-color:red;" onclick="cal4()">DISPLAY</button>
<button id="b12" onclick="closing4()">X</button>
</div>
<div id="id5">
<button style="heignt:45px;width:195px;background-color:red;" onclick="cal2()">STORE DATA</button>
<button style="heignt:45px;width:195px;background-color:red;" onclick="cal3()">ANALYSIS</button>
<button style="heignt:45px;width:195px;background-color:red;" onclick="cal4()">DISPLAY</button>
</div>

</body>
</html>