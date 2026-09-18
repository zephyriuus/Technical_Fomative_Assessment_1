<?= view('partials/header', ['title' => 'Home — Astrelyx', 'active' => 'home']) ?>

<section class="hero">
    <h1>Welcome!</h1>

    <p class="lead">
        A Point-of-Sale foundation for managing customer accounts and
        user records — built with CodeIgniter 4.
    </p>

    <div class="btn-row">
        <a href="<?= site_url('customers') ?>" class="btn btn-primary">View Customers</a>
        <a href="<?= site_url('users') ?>" class="btn btn-ghost">View Users</a>
    </div>
</section>

<?= view('partials/footer') ?>