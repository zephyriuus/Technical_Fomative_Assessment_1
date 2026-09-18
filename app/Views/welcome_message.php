<?= view('partials/header', ['title' => 'Home — Astrelyx', 'active' => 'home']) ?>

<section class="hero">
    <img src="https://64.media.tumblr.com/f2d8860c2a26345e808144a5667acd98/3ed85d4a85d552f5-00/s640x960/502ac6a66b5f66c50f078ec7bbd96b0d45b3e75e.png" alt="..." class="hero-image" height=280px>
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