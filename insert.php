
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $available = $_POST['availability'] === 'True';
    $books = json_decode(file_get_contents('Souvik Sanyal - books.json'), true);
    $newBook = [
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'pages' => $_POST['pages'],
        'available'=>$available,
        'isbn' => $_POST['isbn'],

    ];
    $books[] = $newBook;
    file_put_contents('Souvik Sanyal - books.json', json_encode($books, JSON_PRETTY_PRINT));
    header('Location: home.php');
    exit;
}
?>
