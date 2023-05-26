<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To do list</title>
</head>
<body>
<h1>To Do List</h1>
<table>
    <tr>
        <th>Item no.</th>
        <th>Task</th>
        <th>Details</th>
        <th>Complete By</th>
        <th>Date created</th>
        <th>Completed</th>
    <?php
    foreach ($todoItems as $todoItem) {
        $complete = $todoItem->getCompleted() === 1 ? 'Yes' : 'No';
        echo '<tr><td>' . $todoItem->getId()
            . '</td><td>' . $todoItem->getTasktitle()
            . '</td><td>' . $todoItem->getTaskbody()
            . '</td><td>' . $todoItem->getCompleteby()
            . '</td><td>' . $todoItem->getAdded()
            . '</td><td>' . $complete
            . '</td></tr>';
    }
    ?>
</table>
<a href="/newtodo">New task</a>
</body>
</html>