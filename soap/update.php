<?php
 include 'co.php';
 include 'pro20.php';
 echo '<script>cal5();</script>';
 $query ="select count(*) from boxrubees";
 $re = $con->query($query);
 $row = $re->fetch_array();
 $query ="select total from boxrubees where sn=$row[0]";
 $r= $con->query($query);
 $row = $r->fetch_array();
 $t=$row[0];
 $query ="select count(*) from amount";
 $re = $con->query($query);
 $row = $re->fetch_array();
 $query ="select rem from amount where sn=$row[0]";
 $r= $con->query($query);
 $row = $r->fetch_array();
 $t1=$t+$row[0];
 echo "<p id='pa'>your payment amount is:".$t1."</p>";
?>