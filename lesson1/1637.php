<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		function Fibonacci($n){
			$num1 = 0;
			$num2 = 1;
			$counter = 0;
			$series = '';

			while ($counter < $n) {
				$series.=$num1;
				if($counter < ($n-1)){
					$series.=', ';
				}
				$num3 = $num1 + $num2;
				$num1 = $num2;
				$num2 = $num3;
				$counter++;
			}
			return $series;

		}
		$num = 10;
		
		$Fibonacci_series = Fibonacci($num);
		echo $Fibonacci_series;
		
	?>
	
		</form>		
	</div>

</body>
</html>