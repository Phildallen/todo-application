<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Task</title>
</head>
<body>

<form action="/todo" method="post">
    <label for="tasktitle">Title</label>
    <input id="tasktitle" name="tasktitle" />
    <label for="taskbody">Details</label>
    <input id="taskbody" name="taskbody" />
    <label for="completeby">To be completed by</label>
    <input id="completeby" name="completeby" type="datetime-local"/>

    <button>Submit</button>


</form>

<a href="/todo">Back to tasks</a>

</body>
</html>