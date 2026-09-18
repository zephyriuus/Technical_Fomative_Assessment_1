<?= view('partials/header', ['title' => 'About — Astrelyx', 'active' => 'about']) ?>

<section class="hero">
    <h1>About Astrelyx</h1>
    <p>A small CodeIgniter 4 project built to learn the MVC workflow.</p>

    <div class="about-card">
        <p>
            Astrelyx is a four-page Point-of-Sale foundation built with
            CodeIgniter 4. It shows how a URL maps to a controller method,
            how a controller loads a view, and how data passes from the
            controller into the view.
        </p>
        <p>
            Customer and User records are currently stored in static PHP arrays
            as a temporary data source. A real database will replace them later.
        </p>
        <ul class="tech-list">
            <li>PHP</li>
            <li>CodeIgniter 4</li>
            <li>MVC</li>
        </ul>
    </div>
</section>

<?= view('partials/footer') ?>