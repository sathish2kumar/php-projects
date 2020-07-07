<?php

 include 'co.php';
 include 'pro20.php';
 $s1=($_POST['s1']);
 $s2=($_POST['s2']);
 $day=date("Y"); 
 $d=00;
 $d1=31;
 $query   = "select sum(total) from boxrubees where (date BETWEEN '$day-$s1-$d' AND '$day-$s1-$d1')";
 $r = $con->query($query);
 $row = $r->fetch_array();
 $r1=$row[0];
 
 $query   = "select sum(total) from boxrubees where (date BETWEEN '$day-$s2-$d' AND '$day-$s2-$d1')";
 $r3 = $con->query($query);
 $row = $r3->fetch_array();
 $r2=$row[0];
 
 $s=$r1-$r2;
 echo '<script>cal3();</script>';
 
if ($s>0)
{  
  echo "<p id='per'>month1 is profit=$s compare month2 AND month2 is loss=$s compare month1</p>";
}
else if ($s<0)
{
  $s=$s*(-1);
  echo "<p id='per'>month2 is profit=$s compare month1 AND month1 is loss=$s compare month2</p>";
}
else
{ 

  echo "<p id='per'>no loss and profit</p>";
  
}
?>