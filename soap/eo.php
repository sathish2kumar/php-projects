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
 echo "$date";
 echo "$des";
  $query   = "INSERT into box (soap,clinic,washing,manjal,pathi,tthul,des,date) VALUES('" . $s1 . "','" . $s2 . "','" . $s3 . "','" . $s4 . "','" . $s5 . "','" . $s6 . "','" . $des . "','" . $day . "')";
 $r = $conn->query($query);

 $r1=$s1*510;
 $r2=$s1*510;
 $r3=$s1*240;
 $r4=$s1*150;
 $r5=$s1*100;
 $r6=$s1*180;
 
 $total=$r1+$r2+$r3+$r4+$r5+$r6;
  echo "$total";
 $query   = "INSERT into boxrubees (soap,clinic,washing,manjal,pathi,tthul,des,date,total) VALUES('" . $r1 . "','" . $r2 . "','" . $r3 . "','" . $r4 . "','" . $r5 . "','" . $r6 . "','" . $des . "','" . $day . "','" . $total . "')";
 $r7 = $conn->query($query);

}
?>