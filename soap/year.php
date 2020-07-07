<?php
 
 include 'co.php';
 include 'pro20.php';
 $s1=($_POST['s1']);
 $s2=($_POST['s2']);
 $query   = "select sum(total) from boxrubees where (date BETWEEN '$s1-00-00' AND '$s1-12-31')";
 $r = $con->query($query);
 $row = $r->fetch_array();
 $r1=$row[0];
 echo "$r1";
 $query   = "select sum(total) from boxrubees where (date BETWEEN '$s1-00-00' AND '$s2-12-31')";
 $r3 = $con->query($query);
 $row = $r3->fetch_array();
 $r2=$row[0];
 
 $s=$r1-$r2;
 echo '<script>cal3();</script>';
if ($s>0)
{  
  echo "<p id='per'>year1 is profit=$s compare year2 AND year2 is loss=$s compare year1</p>";
}
else if ($s<0)
{
  $s=$s*(-1);
  echo "<p id='per'>year2 is profit=$s compare year1 AND year1 is loss=$s compare year2</p>";
}
else
{ 

  echo "<p id='per'>no loss and profit</p>";
  
}

?>