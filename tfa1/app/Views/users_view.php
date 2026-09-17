<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <div class="container">

    <header>
        <div class="logo">
            Starry Skies
        </div>
        <nav>
            <a href="<?php echo site_url('/'); ?>">Home</a>
            <a href="<?php echo site_url('about'); ?>">About</a>
            <a href="<?php echo site_url('customers'); ?>">Customers</a>
            <a href="<?php echo site_url('users'); ?>">Users</a>
        </nav>
    </header>
    <br>
    <section class="hero">
        <table class="customers-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
    <footer>
        <p>© 2026 Starry Skies</p>
    </footer>
</body>
</html>