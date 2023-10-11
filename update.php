<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $books = json_decode(file_get_contents('Souvik Sanyal - books.json'), true);
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $availability = $_POST['availability']==="True";
    $isbn=$_POST['isbn'];

    foreach ($books as &$book) {
        if ($book['title'] === $title) {
            $book['author'] = $author;
            $book['price'] = $price;
            $book['availability'] = $availability;
            $isbn=$_POST['isbn'];
            break;
        }
    }

    file_put_contents('Souvik Sanyal - books.json', json_encode($books, JSON_PRETTY_PRINT));
    header('Location: home.php');
    exit;
}
?>

