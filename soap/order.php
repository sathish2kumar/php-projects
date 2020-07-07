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
 $query   = "INSERT into order (soap,washing,clinic,manjal,pathi,tthul,des,date) VALUES('" . $s1 . "','" . $s2 . "','" . $s3 . "','" . $s4 . "','" . $s5 . "','" . $s6 . "','" . $des . "','" . $day . "')";
 $r = $con->query($query);
 echo '<script>cal1();</script>';
 
 echo '<script>ord();</script>';

?>