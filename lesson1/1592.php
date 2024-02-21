<!DOCTYPE html>
<html>
<head>
	<title>Stars</title>
	<meta charset="utf-8">
</head>
<body>
    <?php
    $N = mt_rand(1,100);
    for($i=0 ; $i<=$N ; $i++) {
        for($j=0 ; $j<$i; $j++) {
            echo " * ";
        }
            echo "<br>";
    }
    ?>
</body>
</html>