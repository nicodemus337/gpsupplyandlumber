<?php
$META = [
  'title' => 'About — Gonsoulin & Price Supply & Lumber',
  'desc'  => 'A locally owned hardware and lumber yard rooted in Loreauville’s working history.',
  'path'  => '/about.php',
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
      <a href="/services.php">Services</a>
      <a href="/about.php" class="active">About</a>
      <a href="tel:+1-337-229-4224">Call</a>
      <a href="mailto:gpsupplyandlumber@gmail.com">Email</a>
    </nav>
  </div>
</header>

<main>
  <section class="container">
    <h1>About</h1>
    <p><strong>Continuity matters.</strong> Loreauville has always had a counter where you could get lumber, hardware, and straight answers. Gonsoulin &amp; Price keeps that line unbroken.</p>

    <div class="grid">
      <article class="card">
        <h3>Rooted in Loreauville</h3>
        <p>From early mercantile days on Bayou Teche to modern contractor needs, the mission is simple: stock what works and help you finish the job.</p>
      </article>

      <article class="card">
        <h3>Locally Owned</h3>
        <p>Decisions are made here, by people who know the work and the weather. If we don’t have it, we’ll source it fast.</p>
      </article>

      <article class="card">
        <h3>Reliable Inventory</h3>
        <p>Framing and treated lumber, plywood, roofing tin, fasteners, tools, paint, plumbing and electrical essentials.</p>
      </article>
    </div>

    <section class="card" style="margin-top:16px">
      <h3>Hours & Location</h3>
      <p><strong>Phone:</strong> <a href="tel:+13372294224">337-229-4224</a></p>
      <p><strong>Email:</strong> <a href="mailto:gpsupplyandlumber@gmail.com">gpsupplyandlumber@gmail.com</a></p>
      <p><a class="btn" href="https://maps.google.com/?q=Gonsoulin+%26+Price+Supply+%26+Lumber" target="_blank" rel="noopener">Get Directions</a></p>
    </section>
  </section>
</main>

<footer class="site-footer">
  <div class="container">
    <p>&copy; <?= date('Y') ?> Gonsoulin & Price Supply & Lumber — Loreauville, Louisiana</p>
  </div>
</footer>

</body>
</html>
