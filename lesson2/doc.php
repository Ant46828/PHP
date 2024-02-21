<?php
// 1) Sinh ngẫu nhiên số N từ 2-10
$N = rand(2, 10);

// 2) Tạo ngẫu nhiên N sách
$books = array();
for ($i = 0; $i < $N; $i++) {
    $books[] = "Book " . ($i + 1);
}

// 3) Viết hàm hiển thị danh sách các quyển sách (display)
function display($books) {
    foreach ($books as $index => $book) {
        echo "Book " . ($index + 1) . ": " . $book . "\n";
    }
}

// 4) Sinh ngẫu nhiêu số tự nhiên $index có giá trị từ 0 -> $N - 1. Gọi hàm display
$index = rand(0, $N - 1);
echo "Displaying books:\n";
display($books);

// 5) Xóa phần tử $index khỏi mảng. Gọi hàm display
unset($books[$index]);
$books = array_values($books); // re-index array
echo "\nAfter removing book at index " . ($index + 1) . ":\n";
display($books);

// 6) Tạo ngẫu nhiên 1 quyển sách $book. Thêm vào vị trí $index. Gọi hàm display
$book = "Random Book " . rand(1, 100);
array_splice($books, $index, 0, $book); // insert $book at $index
echo "\nAfter adding a random book at index " . ($index + 1) . ":\n";
display($books);

// 7) Kẻ bảng table hiển thị danh sách sách trên
echo "\nDisplaying books in a table:\n";
echo str_repeat("-", 20) . "\n";
foreach ($books as $index => $book) {
    echo "|" . ($index + 1) . "|" . $book . "|\n";
}
echo str_repeat("-", 20) . "\n";

// 8) Xóa tất cả các phần tử trong mang.
$books = array();
echo "\nAfter removing all books:\n";
display($books);
?>
