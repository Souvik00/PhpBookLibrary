<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>
<body style="background-color: rgb(134, 11, 139);">
    
    <h1 style="text-align: center; background-color:red;">Home</h1>
    <div style="background-color: rgb(134, 11, 139); display: flex; flex-direction: column; align-items: center;">
        <img src="books.jpg" alt="Book" style="width: 200px; height: 300px; ">
        <br>
    <style>
  table.tb { border-collapse: collapse; width:300px; }
  .tb th, .tb td { padding: 5px; border: solid 1px #777; }
  .tb th { background-color: lightblue;}
  text-transform:capitalize
</style>
<table class="table table-striped table-dark">
<thead>
    <tr >
      <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Price</th>
            <th scope="col">Availability</th>
     </tr>
 </thead>
        <?php
        $i=1;
        $books = json_decode(file_get_contents('books.json'), true);
        foreach ($books as $book) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $book['title'] . "</td>";
            echo "<td>" . $book['author'] . "</td>";
            echo "<td>" ."$" . $book['price'] . "</td>";
            echo "<td>" . $book['availability'] . "</td>";
            echo "</tr>";
            $i++;
        }
        ?>
    </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
