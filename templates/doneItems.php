<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Done list</title>
</head>
<body>
<h1>Done List</h1>
<table>
    <tr>
        <th>Item no.</th>
        <th>Task</th>
        <th>Details</th>
        <th>Complete By</th>
        <th>Date created</th>
        <th>Completed</th>
        <?php
        foreach ($doneItems as $doneItem) {
            $complete = $doneItem->getCompleted() === 1 ? 'Yes' : 'No';
            echo '<tr><td>' . $doneItem->getId()
                . '</td><td>' . $doneItem->getTasktitle()
                . '</td><td>' . $doneItem->getTaskbody()
                . '</td><td>' . $doneItem->getCompleteby()
                . '</td><td>' . $doneItem->getAdded()
                . '</td><td>' . $complete
                . '</td></tr>';
        }
        ?>
</table>
<a href="/newtodo">New task</a>
</body>
</html>