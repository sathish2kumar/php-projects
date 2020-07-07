<?php
include 'co.php';
$un =($_POST['sn']);
$pw =($_POST['seg']);
$des =($_POST['des']);
$sql = "INSERT into log (un,pw,des) VALUES('" . $un . "','" . $pw . "','" . $des ."')";
$result = $con->query($sql);
if($result==true)
{
   header('Location: pro2.html');
}
       
?>
