<?php
 include 'co.php';
 include 'pro20.php';
 $s1=($_POST['s1']);
 $s2=($_POST['s2']);
 $start = date("y-m-d", strtotime($s1));
 $end = date("y-m-d", strtotime($s2));
 $query   = "select soap,washing,clinic,manjal,pathi,tthul,date from box where (date BETWEEN '$start' AND '$end')";
 $result = $con->query($query);
 $query   = "select soap,washing,clinic,manjal,pathi,tthul,date,total from boxrubees where (date BETWEEN '$start' AND '$end')";
 $r = $con->query($query);
 echo '<script>cal4();</script>';
 if ($result->num_rows > 0) 
{
   echo "<table id='t' border='1'><tr><th>soap</th><th>washing</th><th>clinic</th><th>manjal</th><th>pathi</th><th>tthul</th><th>date</th></tr>";

while($row = $result->fetch_assoc()) 
{
   echo "<tr><td>".$row["soap"]."</td><td>".$row["washing"]."</td><td>".$row["clinic"]."</td><td>".$row["manjal"]."</td><td>".$row["pathi"]."</td><td>".$row["tthul"]."</td><td>".$row["date"]."</td></tr>";
}
   echo "</table>";
} 
else 
{
   echo "0 results";
}
if ($result->num_rows > 0) 
{
   echo "<table id='t1' border='1'><tr><th>soap</th><th>washing</th><th>clinic</th><th>manjal</th><th>pathi</th><th>tthul</th><th>total</th><th>date</th></tr>";

while($row = $r->fetch_assoc()) 
{
    echo "<tr><td>".$row["soap"]."</td><td>".$row["washing"]."</td><td>".$row["clinic"]."</td><td>".$row["manjal"]."</td><td>".$row["pathi"]."</td><td>".$row["tthul"]."</td><td>".$row["total"]."</td><td>".$row["date"]."</td></tr>";
}
    echo "</table>";
} 
else 
{
    echo "0 results";
}
?>
