<!doctype html>
<html>
<head>
<style>
#b30{
      background-color:green;
      position: absolute;
      right: 150px;
      top: 20px;
      color: white;
      padding: 15px 32px;
}

#b31{
      background-color:green;
      position: absolute;
      right: 10px;
      top: 20px;
      color: white;
      padding: 15px 32px;
}
#bl{
    height:60px;
    width:1260px;   
    background-color:red;
    border-style: inset;
    border-style: outset;
    
}
#tab
{
    position: absolute;
    right:320px;
    top: 405px;
   
}
#per{
      position: absolute;
      left: 150px;
      top: 255px;
      color: white;
}
#pa{
      position: absolute;
      left: 450px;
      top: 255px;
      color: white;
}     
#id1{
      background-color:#000000;
      opacity: 0.6;
      position: absolute;
      left: 10px;
      top: 75px;
      color: white;
      padding: 285px 502px;
      border-style: inset; 
      border-style: outset;
      border-width:10px;
      display:none;
}
#id2{
      background-color:#000000;
      opacity: 0.6;
      position: absolute;
      left:20px;
      top: 75px;
      color: white;
      padding: 195px 352px;
      border-style: inset; 
      border-style: outset;
      border-width:10px;
      display:none;
}
#id3{
      background-color:#000000;
      opacity: 0.9;
      position: absolute;
      left: 10px;
      top: 75px;
      color: white;
      padding: 285px 482px;
      border-style: inset; 
      border-style: outset;
      border-width:10px;
       display:none
}

#id4{
      background-color:#000000;
      opacity: 0.6;
      position: absolute;
      left: 10px;
      top: 75px;
      color: white;
      padding: 285px 482px;
      border-style: inset; 
      border-style: outset;
      border-width:10px;
       display:none
}
#id15{
      background-color:#000000;
      opacity: 0.6;
      position: absolute;
      left: 10px;
      top: 75px;
      color: white;
      padding: 275px 462px;
      border-style: inset; 
      border-style: outset;
      border-width:10px;
      display:none
}
#id5{
      background-color:#000000;
      opacity: 0.6;
      position: absolute;
      top: 75px;
      color: white;
      height:60px;
      width:1260px;
      border-style: inset; 
      border-style: outset;
      
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
      top: 5px;
      color: white;
      padding: 20px 20px;
      display:none;
}
#b13{
      position: absolute;
      left: 200px;
      top:10px;
      padding:10px 50px;
     
}
#b14{
      position: absolute;
      left: 350px;
      top:10px;
      padding:10px 50px;
     
}
#b15{
      position: absolute;
      left: 536px;
      top:10px;
      padding:10px 50px;
     
}
#b16{
      position: absolute;
      right: 393px;
      top:10px;
      padding:10px 50px;
     
}
#b17{
      position: absolute;
      right: 207px;
      top:10px;
      padding:10px 50px;
     
}
#b18{
      position: absolute;
      right: 20px;
      top:10px;
      padding:10px 10px;
     
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
      top:200px;
      display:none;
}
#f5{
      position: absolute;
      left:10px;
      top:200px;
      display:none;
}
#f6{
      position: absolute;
      left:10px;
      top:200px;
      display:none;
}
#fd{
      position: absolute;
      left:390px;
      top:100px;
     
}
#t1{
      position: absolute;
      left:20px;
      top:145px;
      
}
#t{
      position: absolute;
      right:300px;
      top:145px;
      
}
</style>
</head>
<script>
function first()
{
    document.getElementById("id5").style.display = "block";
    document.getElementById("bl").style.display = "block";
    document.getElementById("bo").style.display = "block";

}
function cal1() {
    

    document.getElementById("id1").style.display = "block";
    document.getElementById("b3").style.display = "block";
    document.getElementById("b2").style.display = "block"; 
}
function cal2() {
    

    
    document.getElementById("id2").style.display = "block";
    document.getElementById("b5").style.display = "block";
}
function cal3() {
    
   
    document.getElementById("id3").style.display = "block";
    document.getElementById("id7").style.display = "block";
    document.getElementById("b7").style.display = "block";
}
function cal4() {
    

    document.getElementById("id4").style.display = "block";
    
    document.getElementById("b12").style.display = "block";
}
function cal5() {
    

    document.getElementById("id15").style.display = "block";
    document.getElementById("b18").style.display = "block";
    
}
function closing1() {
    document.getElementById("id1").style.display = "none";
    document.getElementById("b2").style.display = "none";
    document.getElementById("b3").style.display = "none"; 
    document.getElementById("tab").style.display = "none";

}
function closing2() {
         document.getElementById("id2").style.display = "none";
        document.getElementById("b5").style.display = "none"; 
}
function closing3() {
        document.getElementById("id3").style.display = "none";
        document.getElementById("b7").style.display = "none"; 
        document.getElementById("per").style.display = "none";

}
function closing4() {
        document.getElementById("id4").style.display = "none";
        document.getElementById("b12").style.display = "none"; 
        document.getElementById("t").style.display = "none";
        document.getElementById("t1").style.display = "none";
}
function closing5() {
        document.getElementById("id15").style.display = "none";
        document.getElementById("b18").style.display = "none"; 
        document.getElementById("pa").style.display = "none";
}
function viewcalc() {
    document.getElementById("f2").style.display = "block"; 
    document.getElementById("id6").style.display = "block";

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
function stor() {
    document.getElementById("f3").style.display = "none";
    document.getElementById("id2").innerHTML = "store sucess!";
    document.getElementById("id2").style.padding = "285px 430px";
}
function ord() {
    document.getElementById("f1").style.display = "none";
    document.getElementById("id1").innerHTML = "order sucess!";
    document.getElementById("id1").style.padding = "285px 430px";
}
</script>
<body id="bo" style="background-color:lightblue;">
<div id="bl">
<?php
  
  echo "<button id='b30'>sathish</button>";
  echo "<button id='b31'>koothiparai</button>";
?>
</div>
<div id="id5">
<button id="b13"  onclick="cal1()">ORDER</button>
<button id="b14" onclick="cal2()">STORE DATA</button>
<button id="b15" onclick="cal3()">ANALYSIS</button>
<button id="b16" onclick="cal4()">DISPLAY</button>
<button id="b17" onclick="cal5()">PAYAMOUNT</button>
</div>
<div id="id1">
<button id="b2" onclick="closing1()">X</button>
<button id="b3" onclick="viewcalc()">VIEW CALC</button>
<form id="f1" action="order.php" method="POST">
SoapBox:
<input type="text" name="s1" ></br>
washing:
<input type="text" name="s2"></br></label>
clinic:
<input type="text" name="s3"></br>
Manjal:
<input type="text" name="s4"></br>
Pathi:
<input type="text" name="s5"></br>
Tthul:
<input type="text" name="s6"></br>

<input type="submit" value="ORDER"></br></form>


<form id="f2" action="calll.php" method="POST">
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
<button id="b5" onclick="closing2()">X</button>
<form id="f3" action="store.php" method="POST">
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
</form>

</div>
<div id="id3">
<button id="b7" onclick="closing3()">X</button>

<div id="id7">
<button id="b8" style="heignt:45px;width:195px;background-color:red;" onclick="week()">ONEWEEK</button>
<button id="b9" style="heignt:45px;width:195px;background-color:red;" onclick="month()">ONEMONTH</button>
<button id="b10" style="heignt:45px;width:195px;background-color:red;" onclick="year()">ONEYEAR</button>
<form id="f4" method="POST" action="week.php">
date1:
<input type="text" name="s1">
date2:
<input type="text" name="s2">
<input type="submit" value="submit">

</form>


<form id="f5" method="POST" action="month.php">
month1:
<input type="text" name="s1">
month2:
<input type="text" name="s2">
<input type="submit" value="submit">

</form>

<form id="f6" method="POST" action="year.php">
year1:
<input type="text" name="s1">
year2:
<input type="text" name="s2">
<input type="submit" value="submit">

</form>
</div>
</div>
<div id="id4">

<button id="b12" onclick="closing4()">X</button>

<form action="dis.php" id="fd" method="POST">
startdate:
<input type="text" name="s1" ></br>
enddate:
<input type="text" name="s2"></br></label>
</br><input type="submit" value="submit"></br>

</form>


</div>
<div id="id15">
<button id="b18" onclick="closing5()">X</button>
<form action="update.php" method="POST">
<input type="submit" value="click">
</div>

</body>
</html>