
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $books = json_decode(file_get_contents('books.json'), true);
    $newBook = [
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'price' => $_POST['price'],
        'availability' => $_POST['availability']
    ];
    $books[] = $newBook;
    file_put_contents('books.json', json_encode($books, JSON_PRETTY_PRINT));
    header('Location: home.php');
    exit;
}
?>
