<?php
session_start();
if(isset($_POST['create-bwish']))
{
$str11=$_POST['bname'];
$_SESSION["bname"] = $str11;

$str1=$_SESSION["bname"];

include('wheader.php');
    

}

?>

<html>
<head>
<link href="css/style.css" rel="stylesheet">
</head>

<body>
          
	
<div class="container">

	<div class="createBox">
    
<h2 class="marqTxt">Create Birthday Greeting <br>for Everyone</h2>

<form method="post" class="form-grp">
<div class="inputDiv">
<input type="text" class="form-control" name="bname" placeholder="Your wish Name" autocomplete="off" required>
 </div>
<div class="btn ">
<button type="submit" name="create-bwish" class="indexbtn">Create Wish</button>
</div>
</form>


    </div>
	
	</div>	
		</div>
</body></html>