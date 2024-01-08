<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    $N = rand(1,100);

    for($i=0;$i<=$N;$i++) {
        $Name = rand(1,100);
        $Author = rand(1,100);
        $Price = rand(1,10000);
        $Publisher = rand(1,100);
        echo "Tên : quyển sách ".$Name;
        echo "<br>";
        echo "Tác giả : tác giả ".$Author;
        echo "<br>";
        echo "Giá : ".$Price;
        echo "<br>";
        echo "Nhà xuất bản : ".$Publisher;
        echo "<br>";
        echo "<br>";
    }
    ?>
</body>
</html>	