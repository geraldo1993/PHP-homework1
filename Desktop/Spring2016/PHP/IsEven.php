<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<html>
	<head>
		<title>
			Is Iven 
		</title>
	</head>
	<body>
		<?php
			$value=3.9;
			
			if (is_numeric($value)){
				$value=round($value);
				
					if($value % 2 ==0){
						echo ("$value is even");
					}else{
						echo("$value is not even!");
					}
			}else{
					echo("'$value' is not number!");
				}
		?>
	</body>
</html>