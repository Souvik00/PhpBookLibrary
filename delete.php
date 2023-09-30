
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $books = json_decode(file_get_contents('books.json'), true);
    $title = $_POST['title'];

    foreach ($books as $key => $book) {
        if ($book['title'] === $title) {
            unset($books[$key]);
            break;
        }
    }

    file_put_contents('books.json', json_encode(array_values($books), JSON_PRETTY_PRINT));
    header('Location: home.php');
    exit;
}
?>
