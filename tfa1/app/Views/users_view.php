<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <strong><?= $user['name'] ?></strong> - <?= $user['email'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
</body>
</html>
