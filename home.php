<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <style>
  table.tb { border-collapse: collapse; width:300px; }
  .tb th, .tb td { padding: 5px; border: solid 1px #777; }
  .tb th { background-color: lightblue;}
</style>
<table class="tb" id="mytable">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Availability</th>
        </tr>
        <?php
        $books = json_decode(file_get_contents('books.json'), true);
        foreach ($books as $book) {
            echo "<tr>";
            echo "<td>" . $book['title'] . "</td>";
            echo "<td>" . $book['author'] . "</td>";
            echo "<td>" ."$" . $book['price'] . "</td>";
            echo "<td>" . $book['availability'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
