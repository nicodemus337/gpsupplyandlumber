<<?php
$META = [
  'title' => 'Gonsoulin & Price — Supply & Lumber',
  'desc'  => 'Gonsoulin & Price Supply & Lumber — Generations Rooted in Service and Supply.',
  'path'  => '/',
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
      <img src="/images/gp-logo.png" alt="Gonsoulin & Price sawblade logo" class="brand__logo">
      <span class="brand__title">Gonsoulin & Price Supply & Lumber</span>
    </a>
    <nav class="site-nav">
      <a href="/" class="active">Home</a>
      <a href="/services.php">Services</a>
      <a href="tel:+1-337-229-4224">Call</a>
      <a href="mailto:gpsupplyandlumber@gmail.com">Email</a>
    </nav>
  </div>
</header>

<main>
  <section class="hero" id="home">
    <img class="hero__logo" src="/images/gp-logo.png" alt="Gonsoulin & Price sawblade logo">
    <p class="hero__slogan">“Generations Rooted in Service and Supply”</p>
    <div class="cta">
      <a class="btn btn--solid" href="tel:+1-337-229-4224">Call the Desk</a>
      <a class="btn" href="https://maps.google.com/?q=Gonsoulin+%26+Price+Supply+%26+Lumber" target="_blank" rel="noopener">Get Directions</a>
    </div>
  </section>

  <section class="container grid">
    <article class="card" id="lumber">
      <h3>Lumber Yard</h3>
      <p>Framing, treated, plywood, roofing tin. If we don’t have it, we’ll source it fast.</p>
    </article>

    <article class="card" id="hardware">
      <h3>Hardware</h3>
      <p>Fasteners, hand &amp; power tools, plumbing &amp; electrical essentials — the everyday kit that keeps jobs moving.</p>
    </article>

    <article class="card" id="services">
      <h3>Services</h3>
      <p>Special orders, local delivery, contractor accounts, key cutting, and straight talk at the counter.</p>
      <div class="cta"><a class="btn" href="/services.php">See Services</a></div>
    </article>
  </section>

  <section class="container cta" id="contact" style="margin-top:8px">
    <a class="btn btn--solid" href="tel:+1-337-229-4224">Call Now</a>
    <a class="btn" href="mailto:gpsupplyandlumber@gmail.com">Email an Order</a>
    <a class="btn" href="https://maps.google.com/?q=Gonsoulin+%26+Price+Supply+%26+Lumber" target="_blank" rel="noopener">Directions</a>
  </section>
</main>

<footer class="site-footer">
  <div class="container">
    <p>&copy; <?= date('Y') ?> Gonsoulin & Price Supply & Lumber — Loreauville, Louisiana</p>
  </div>
</footer>

</body>
</html>
