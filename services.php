<?php
$META = [
  'title' => 'Services — Gonsoulin & Price Supply & Lumber',
  'desc'  => 'Local delivery, special orders, contractor accounts, key cutting, and more.',
  'path'  => '/services.php',
  'image' => '/images/gp-logo.png'
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($META['title']) ?></title>
  <meta name="description" content="<?= htmlspecialchars($META['desc']) ?>" />
  <meta property="og:title" content="<?= htmlspecialchars($META['title']) ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($META['desc']) ?>" />
  <meta property="og:image" content="<?= htmlspecialchars($META['image']) ?>" />
  <meta property="og:url" content="<?= htmlspecialchars($META['path']) ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
</head>
<body>

<header class="site-header">
  <div class="container">
    <a href="/" class="brand">
      <img src="/images/gp-logo.png" alt="Gonsoulin & Price logo" class="brand__logo">
      <span class="brand__title">Gonsoulin & Price Supply & Lumber</span>
    </a>
    <nav class="site-nav">
      <a href="/">Home</a>
      <a href="/services.php" class="active">Services</a>
      <a href="/about.php">About</a>
      <a href="tel:+1-337-229-4224">Call</a>
      <a href="mailto:gpsupplyandlumber@gmail.com">Email</a>
    </nav>
  </div>
</header>

<main>
  <section class="container">
    <h1>Services</h1>
    <p>Straightforward help that keeps jobs moving in and around Loreauville.</p>

    <div class="grid">
      <article class="card">
        <h3>Special Orders</h3>
        <p>Hard-to-find lumber dimensions, fasteners, tools, and fixtures. We source fast with clear lead times.</p>
      </article>

      <article class="card">
        <h3>Local Delivery</h3>
        <p>Yard-to-site delivery for lumber and bulk orders. Same-day when stock allows. Call for a slot.</p>
        <p><strong>Phone:</strong> <a href="tel:+13372294224">337-229-4224</a></p>
      </article>

      <article class="card">
        <h3>Contractor Accounts</h3>
        <p>Project-based pricing, pull lists, and simple invoicing. Bring your license and insurance.</p>
      </article>

      <article class="card">
        <h3>Key Cutting</h3>
        <p>Standard house and padlock blanks, quick turnaround while you wait.</p>
      </article>

      <article class="card">
        <h3>Paint & Match</h3>
        <p>Color matching on common lines and re-orders by code. Bring a chip or old can.</p>
      </article>

      <article class="card">
        <h3>Board Foot & Cut List Help</h3>
        <p>We’ll sanity-check your cut sheet and convert takeoffs to a practical pick list.</p>
      </article>
    </div>

    <div class="cta" style="margin-top:16px">
      <a class="btn btn--solid" href="tel:+1-337-229-4224">Schedule Delivery</a>
      <a class="btn" href="mailto:gpsupplyandlumber@gmail.com?subject=Special%20Order%20Request">Request a Special Order</a>
      <a class="btn" href="https://maps.google.com/?q=Gonsoulin+%26+Price+Supply+%26+Lumber" target="_blank" rel="noopener">Get Directions</a>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="container">
    <p>&copy; <?= date('Y') ?> Gonsoulin & Price Supply & Lumber — Loreauville, Louisiana</p>
  </div>
</footer>

</body>
</html>
