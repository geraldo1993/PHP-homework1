<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<html>
	<head>
		<title>
			Interest Array 
		</title>
	</head>
	<body>
		<?php
			
			
			
			$Days[] = "Monday"; 
			$Days[] = "Tuesday";
			$Days[] = "Wednesday";
			$Days[] = "Thursday";
			$Days[] = "Friday";
			$Days[] = "Saturday";
			$Days[] = "Sunday";
			
			echo "<p> the days of the week in English are: </p>";
			for ($Count = 0; $Count < 7; $Count++) {
			echo $Days[$Count], "<br/>";
			}
			
			
			
			$Days[0] = "lundi";
			$Days[1] = "mardi";
			$Days[2] = "mercredi"; 
			$Days[3] = "jeudi"; 
			$Days[4] = "vendredi"; 
			$Days[5] = "samedi";
			$Days[6] = "dimanche";
			
			echo "<p> the days of the week in French are: </p>";
			for ($Count = 0; $Count < 7; $Count++) {
			echo $Days[$Count], "<br/>";
			}
		?>
	</body>
</html>
