<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <h1>Customers</h1>
    <ul>
        <?php foreach ($customers as $customer): ?>
            <li>
                <strong><?= $customer['name'] ?></strong> - <?= $customer['email'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>