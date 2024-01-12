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
        $N = rand(3,15);
        $bookList = [];
        for($i=0;$i<$N;$i++) {
           $book = [
            'title' => 'Book'.($i+1),
            'thumbnail' => 'Thumbnail'.($i+1),
            'price' => rand(10000,100000)
           ];
        $bookList[] = $book; }
        echo "<table border='1'>";
        echo "<tr>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Price</th>
              </tr>";
        foreach ($bookList as $book) {
            echo "<tr>
            <td>{$book['title']}</td>
            <td>{$book['thumbnail']}</td>
            <td>{$book['price']}</td>
            </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>