<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
$hd=$_SESSION['bname'];
if(!($hd=NULL)){
$hd=$_SESSION['bname'];
$hd33="wishcreated.php?".$hd;
header("Location: $hd33");
 }

?>