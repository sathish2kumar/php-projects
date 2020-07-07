<?php
 
 include 'co.php';
 include 'pro2.php';
 $s1=($_POST['s1']);
 $s2=($_POST['s2']);
 $s3=($_POST['s3']);
 $s4=($_POST['s4']);
 $s5=($_POST['s5']);
 $s6=($_POST['s6']);
 $query ="select des from log where un='sathish'";
 $re = $con->query($query);
 $row = $re->fetch_assoc();
 $r1=$s1*510;
 $r2=$s2*510;
 $r3=$s3*240;
 $r4=$s4*150;
 $r5=$s5*100;
 $r6=$s6*180;
 $total=$r1+$r2+$r3+$r4+$r5+$r6;
 echo '<script>calculate();</script>';
 echo "<table id='tab' border=1>";
 echo "<tr><td>".'soap'."</td>";
 echo "<td>".$r1."</td></tr>";
 echo "<tr><td>".'clinic'."</td>";
 echo "<td>".$r2."</td></tr>";
 echo "<tr><td>".'washing'."</td>";
 echo "<td>".$r3."</td></tr>";
 echo "<tr><td>".'manjal'."</td>";
 echo "<td>".$r4."</td></tr>";
 echo "<tr><td>".'pathi'."</td>";
 echo "<td>".$r5."</td></tr>";
 echo "<tr><td>".'tthul'."</td>";
 echo "<td>".$r6."</td></tr>";
 echo "<tr><td>".'total'."</td>";
 echo "<td>".$total."</td></tr>";
 echo "</table>";
?>
 