<?php
$META = [
  'title' => 'About · Gonsoulin & Price — Supply & Lumber',
  'desc'  => 'A locally owned hardware tradition in Loreauville — same spirit, new name. Generations rooted in service and supply.',
  'path'  => '/about.php',
  'image' => '/images/gp-logo.png'
];
require_once __DIR__ . '/includes/header.php';
?>
<main>
  <header class="site-header">
    <div class="container topbar">
      <a class="brand" href="index.php">
        <img class="brand__logo" src="images/gp-logo.png" alt="Gonsoulin & Price Supply & Lumber logo">
        <h1 class="brand__title">Gonsoulin &amp; Price<br>Supply &amp; Lumber</h1>
      </a>

      <nav class="nav" aria-label="Main">
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="about.php" aria-current="page">About</a>
        <a href="contact.php">Contact</a>
      </nav>
    </div>
  </header>

  <section class="container">
    <h2>Our Story</h2>
    <p>We’re a continuation of a simple promise: Loreauville will always have a locally owned hardware and lumber store. New name, same mission — stock what the community needs and help you finish the job.</p>
    <p>From everyday fixes to ranch work and renovations, we focus on practical inventory, fair advice, and fast sourcing when something special is required.</p>
    <p><strong>“Generations Rooted in Service and Supply.”</strong></p>
  </section>

  <section class="container grid">
    <article class="card">
      <h3>Local Ownership</h3>
      <p>Decisions made here, for here. If it matters to the parish, it matters to us.</p>
    </article>
    <article class="card">
      <h3>Dependable Stock</h3>
      <p>Everyday materials, fasteners, tools, and supplies that keep jobs moving.</p>
    </article>
    <article class="card">
      <h3>Straight Talk</h3>
      <p>No fluff. Tell us the job; we’ll get you what works.</p>
    </article>
  </section>
</main>

<footer class="site-footer">
  <div class="container foot">
    <div>&copy; <span id="y"></span> Gonsoulin &amp; Price Supply &amp; Lumber</div>
    <nav class="nav">
      <a href="services.php">Services</a>
      <a href="about.php" aria-current="page">About</a>
      <a href="contact.php">Contact</a>
    </nav>
  </div>
</footer>

<script>document.getElementById('y').textContent=new Date().getFullYear();</script>
</body>
</html>
