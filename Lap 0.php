<!DOCTYPE html>
<html>
<head>
	<title>Lab 0</title>
</head>
<body>
	<?php
		$number= array(20,30,40,50,10);
		$mininum=$number[0];
		$maximum=$number[0];
		for($i=0;$i<5;$i++)
		{
			if($number[$i]<$mininum)
			{
				$mininum=$number[$i];
			}
			if ($number[$i]>$maximum)
			{
				$maximum=$number[$i];
			}
		} 
		echo "mininum :".$mininum."<br>" ;
		echo "maximum :".$maximum;
	?>
</body
</html>