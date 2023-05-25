<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To do list</title>
</head>
<body>
<h1>Our Books</h1>
<ul>
    <?php
    foreach ($todoItems as $todoItem) {
//        echo '<li>' . $book['title'] . ' - ' . $book['author'] . '</li>';
        echo '<li>' . $todoItem->getId() . ' - ' . $todoItem->getItem() . ' - ' . $todoItem->getAdded() . ' - ' . $todoItem->getCompleted() . '</li>';
    }
    ?>
</ul>
</body>
</html>