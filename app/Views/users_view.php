<?= view('partials/header', ['title' => 'Users — Astrelyx', 'active' => 'users']) ?>

<section class="hero">
    <h1>User Accounts</h1>
    <p>A list of registered staff and user accounts.</p>

    <div class="table-wrap">
        <table>
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
    </div>
</section>

<?= view('partials/footer') ?>