<?php
 include 'co.php';
 include 'pro20.php';
 $s1=($_POST['s1']);
 $s2=($_POST['s2']);
 $date1 = date("y-m-d", strtotime($s1));
 $date2 = date("y-m-d", strtotime($s2));
 $query   = "select total from boxrubees where date='$date1'";
 $r = $con->query($query);
 $row = $r->fetch_assoc();
 $r1=$row['total'];
 $query   = "select total from boxrubees where date='$date2'";
 $r3 = $con->query($query);
 $row = $r3->fetch_assoc();
 $r2=$row['total'];
 $s=$r1-$r2;
 echo '<script>cal3();</script>';
if ($s>0)
{  
  echo "<p id='per'>date1 is profit=$s compare date2 AND date2 is loss=$s compare date1</p>";
}
else if ($s<0)
{
  $s=$s*(-1);
  echo "<p id='per'>date2 is profit=$s compare date1 AND date1 is loss=$s compare date2</p>";
}
else
{ 

  echo "<p id='per>no loss and profit</p>";
  
}
?>

