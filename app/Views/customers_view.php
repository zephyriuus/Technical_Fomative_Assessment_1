<?= view('partials/header', ['title' => 'Customers — Astrelyx', 'active' => 'customers']) ?>

<section class="hero">
    <h1>Customer Accounts</h1>
    <p>A list of registered customer accounts.</p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= $customer['name'] ?></td>
                        <td><?= $customer['email'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?= view('partials/footer') ?>