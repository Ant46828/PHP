<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
        $random = mt_rand(1,100);
        $sum=0;
        echo "So ngau nhien : " .$random;
        echo "<br>";
        for($i=0;$i<$random;$i++) {
            $sum+=$i;
        }
        echo "Tong cac so tu 1 den N la : ".$sum;
    ?>
</body>
</html>	