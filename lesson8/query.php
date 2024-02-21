<?php
function querysql($sql) {
    $conn = mysqli_connect('localhost:3306','root','','c2307l');
    mysqli_set_charset($conn,'utf8');
    
    mysqli_query($conn, $sql);

    mysqli_close($conn);
}
?>