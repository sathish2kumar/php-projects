<?php
include 'co.php';
include 'pn.php';
$un =($_POST['sn']);
$pw =($_POST['seg']);
$sql = "SELECT * FROM log";
$result = $con->query($sql); 
if ($result->num_rows > 0) 
{
  while($row = $result->fetch_assoc()) 
	{
          if($row["un"]=="$un" && $row["pw"]=="$pw")
          {
             $sql = "SELECT des FROM log where un='$un'";
             $result = $con->query($sql);
             $row = $result->fetch_assoc(); 
             $des=$row["des"];
             $cookie_name = "sathish";
             $cookie_value = "kumar";
             setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
             echo'<script> window.location="pro20.php"; </script> ';
             exit();
      
          }
        }
}
  echo '<script>login();</script>';
  echo '<script>loginfail();</script>';

?>
