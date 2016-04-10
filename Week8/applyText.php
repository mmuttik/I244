<?php
	$textCol="black";
	if (isset($_POST['textColour']) && $_POST['textColour']!="") {
 	  $textCol=htmlspecialchars($_POST['textColour']);
	}
	$backgCol="white";
	if (isset($_POST['bgColour']) && $_POST['bgColour']!="") {
 	  $backgCol=htmlspecialchars($_POST['bgColour']);
	}
	$contWid='0';
	if (isset($_POST['contourWidth']) && $_POST['contourWidth']!="") {
 	  $contWid=htmlspecialchars($_POST['contourWidth']);
	}
	$contStyle='solid';
	if (isset($_POST['style']) && $_POST['style']!="") {
 	  $contStyle=htmlspecialchars($_POST['style']);
	}
	$contCol='black';
	if (isset($_POST['contourColour']) && $_POST['contourColour']!="") {
 	  $contCol=htmlspecialchars($_POST['contourColour']);
	}
	$contRad='0';
	if (isset($_POST['radius']) && $_POST['radius']!="") {
 	  $contRad=htmlspecialchars($_POST['radius']);
	}
	$theResult="Posted text:";
	if (isset($_POST['text']) && $_POST['text']!="") {
 	  $userstext=htmlspecialchars($_POST['text']);
	}
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP</title>
  <meta charset="utf-8">
  <style type="text/css">
		#field {
		height: auto;
    min-height: 25px;
		border-style: solid;
		border-color: black;
	}
  	#result {
		height: auto;
		margin: auto;
		padding: 10px;
		background-color: <?php echo $textCol; ?>;
		color: <?php echo $backgCol; ?>;
		border-width: <?php echo $contWid; ?>px;
		border-style: <?php echo $contStyle; ?>;
		border-color: <?php echo $contCol; ?>;
		border-radius: <?php echo $contRad; ?>px;
	}
  </style>
</head>

<body>

	<div id="field">
		<form action="kommentaar.php" method="post">
	 	<textarea name="text" cols="30" rows="15" placeholder = "Write here..." </textarea> <br>
		<input type="color" name="textColour"> Colour of text <br>
		<input type="color" name="bgColour"> Colour of background <br>
		Contour<br>
		<input type="number" name="contourWidth" min="0" max="20"> Contour width (0-20px)<br>
		<select name="style"><option>solid</option><option>groove</option><option>ridge</option></select> <br>
		<input type="color" name="contourColour"> Colour of contour <br>
		<input type="number" name="radius" min="0" max="100"> Contour border radius (0-100px)<br>
		<input type="submit" value="Apply">
		</form>
	</div>

	<div id="result"><?php echo $theResult; ?></div>

</body>

</html>
