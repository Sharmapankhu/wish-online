<?php
session_start();
$url =  "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$url1 =  basename($_SERVER['REQUEST_URI']);
$rest = substr($url1, 16);  // returns "abcde"
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Pnick.in</title>
<link href="css/style.css" rel="stylesheet">

  </head>

  <body>

<div class="container">

	<div >
	   <div class="wishBox">
		 <h1 class=" bl"><?php echo  "  $rest  "?></h1>
    <br>
        <h2 class="wishingLine">Wishing You Happy Birthday :-)</h2>
	
		   <div class="img-responsive ">
		   <img src="img/giphy.gif" height="250" width="250">
		   
		   </div>
		</div>
	
            <div class="shareLink">
    
				<i class="img1" ><a href="whatsapp://send?text=<?php echo $url; ?>" data-action="share/whatsapp/share" ><img src="img/WhatsApp.png" width="35px" height="35px" > </a></i></div>
		<div class="createbtn">
		<a href="bday.php">Create Wish </a>
		
		</div>
	</div>
	  </div>
	  </body>

</html>
