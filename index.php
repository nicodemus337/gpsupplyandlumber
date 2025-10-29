<?php
$META = [
  'title' => 'Gonsoulin & Price — Supply & Lumber',
  'desc'  => 'Gonsoulin & Price Supply & Lumber — Generations Rooted in Service and Supply.',
  'path'  => '/',
  'image' => '/images/gp-logo.png'
];
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/nav.php';
?>
<main>
  <section class="hero" id="home">
    <img class="hero__logo" src="images/gp-logo.png" alt="Gonsoulin & Price sawblade logo">
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
      <div class="cta"><a class="btn" href="services.php">See Services</a></div>
    </article>
  </section>

  <section class="container cta" id="contact" style="margin-top:8px">
    <a class="btn btn--solid" href="tel:+1-337-229-4224">Call Now</a>
    <a class="btn" href="mailto:gpsupplyandlumber@gmail.com">Email an Order</a>
    <a class="btn" href="https://maps.google.com/?q=Gonsoulin+%26+Price+Supply+%26+Lumber" target="_blank" rel="noopener">Directions</a>
  </section>
</main>
<?php require_once __DIR__ . '/footer.php'; ?>
