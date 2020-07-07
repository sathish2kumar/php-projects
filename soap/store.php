<?php
 
 include 'co.php';
 include 'pro20.php';
 $s1=($_POST['s1']);
 $s2=($_POST['s2']);
 $s3=($_POST['s3']);
 $s4=($_POST['s4']);
 $s5=($_POST['s5']);
 $s6=($_POST['s6']);
 $query ="select des from log where un='sathish'";
 $re = $con->query($query);
 $row = $re->fetch_assoc();
 $des=$row['des'];
 $day=date("Y/m/d");
 $query   = "INSERT into box (soap,washing,clinic,manjal,pathi,tthul,des,date) VALUES('" . $s1 . "','" . $s2 . "','" . $s3 . "','" . $s4 . "','" . $s5 . "','" . $s6 . "','" . $des . "','" . $day . "')";
 $r = $con->query($query);
 $r1=$s1*510;
 $r2=$s2*510;
 $r3=$s3*240;
 $r4=$s4*150;
 $r5=$s5*100;
 $r6=$s6*180;
 $total=$r1+$r2+$r3+$r4+$r5+$r6;
 $query   = "INSERT into boxrubees (soap,washing,clinic,manjal,pathi,tthul,des,date,total) VALUES('" . $r1 . "','" . $r2 . "','" . $r3 . "','" . $r4 . "','" . $r5 . "','" . $r6 . "','" . $des . "','" . $day . "','" . $total . "')";
 $r7 = $con->query($query);
 if($r==true && $r7==true)
{
  
 echo '<script>cal2();</script>';
 echo '<script>stor();</script>';
}
?>