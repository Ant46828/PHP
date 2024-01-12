<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    $N=rand(2,10);
    $books = [];
    for($i=0;$i<=$N;$i++) {
        $books[] = "Book".($i+1);
    }
$index = rand(0,$N-1);
function display($books) {
    foreach($books as $index => $book) {
        echo "Book". ($index + 1) . ": " .$book . "<br>";
    }
}
    
    echo "Display books: <br>";
    display($books);
    ?>
</body>
</html>