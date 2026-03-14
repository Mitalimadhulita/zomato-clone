<?php
$task = [];
if(!isset($_SESSION['task'])){
    $_SESSION['task'] = [];
}
if(isset($_SESSION['add'])){
    $_SESSION['task'] = [];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: Arial;
    background: #f2f2f2;
}

.container {
    width: 400px;
    margin: 50px auto;
    background: white;
    padding: 20px;
    border-radius: 5px;
}

form {
    display: flex;
}

input {
    flex: 1;
    padding: 8px;
}

button {
    padding: 8px;
    background: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

ul {
    list-style: none;
    padding: 0;
    margin-top: 20px;
}

li {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    display: flex;
    justify-content: space-between;
}

.actions a {
    margin-left: 10px;
    text-decoration: none;
    font-weight: bold;
}
    </style>
</head>
<body>

<div class="container">
    <h2>My To-Do List</h2>

    <form method="POST">
        <input type="text" name="task" placeholder="Enter new task..." required>
        <button type="submit" name="add">Add</button>
    </form>

    <ul>
        <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
            <li>
                <?php if ($task['status'] == 'completed'): ?>
                    <strike><?= $task['task']; ?></strike>
                <?php else: ?>
                    <?= $task['task']; ?>
                <?php endif; ?>

                <div class="actions">
                    <?php if ($task['status'] == 'pending'): ?>
                        <a href="?complete=<?= $index ?>">✔</a>
                    <?php endif; ?>
                    <a href="?delete=<?= $index ?>">✖</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>