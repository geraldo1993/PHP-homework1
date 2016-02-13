<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> <html>
	<head>
		<title>
			Interest Array 
		</title>
	</head>
	<body>
		<?php
			$someval = 4.999;
			$ceiled = ceil($someval);
			$floored = floor($someval);
			$a = round(4.3);
			$b = round(4.6);
			
			echo("Value to ceil or floor up to nearest number is: 4.999 ");
			
			echo ("<p> ceil() ==> $ceiled 
			<br/> floor() ==> $floored 
			<br/> Value to be rounded 1st = 4.3 , 2nd = 4.6
			<br/> round() ==> $a
			<br/> round() 2nd time ==> $b</p>");
		?>
	</body>
</html>
