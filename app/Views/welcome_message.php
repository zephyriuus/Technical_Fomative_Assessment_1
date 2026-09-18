<?= view('partials/header', ['title' => 'Home — Starry Skies', 'active' => 'home']) ?>

<section class="hero">
    <h1>Welcome!</h1>

    <div class="btn-row">
        <a href="<?= site_url('customers') ?>" class="btn btn-primary">View Customers</a>
        <a href="<?= site_url('users') ?>" class="btn btn-ghost">View Users</a>
    </div>
</section>

<?= view('partials/footer') ?>