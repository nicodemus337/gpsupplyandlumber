<?php
$META = [
  'title' => 'Services · Gonsoulin & Price — Supply & Lumber',
  'desc'  => 'Special orders, local delivery, contractor accounts, key cutting, and straight talk at the counter.',
  'path'  => '/services.php',
  'image' => '/images/gp-logo.png'
];
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/nav.php';
?>
<main>
  <section class="container grid" id="services">
    <article class="card">
      <h3>Special Orders</h3>
      <p>Hard-to-find fasteners, fittings, tools, and materials. If we don’t have it, we’ll source it fast.</p>
    </article>
    <article class="card">
      <h3>Local Delivery</h3>
      <p>Ask at the counter for current delivery windows and fees inside our service area.</p>
    </article>
    <article class="card">
      <h3>Contractor Accounts</h3>
      <p>Consistent stocking, bulk orders, and practical service for local crews.</p>
    </article>
    <article class="card">
      <h3>Key Cutting</h3>
      <p>Quick duplicates for common key types while you shop.</p>
    </article>
    <article class="card">
      <h3>Paint Matching</h3>
      <p>Bring a sample; we’ll match the color and set you up with the right prep and finish.</p>
    </article>
  </section>

  <section class="container cta" style="margin-top:8px">
    <a class="btn btn--solid" href="tel:+1-337-229-4224">Call Now</a>
    <a class="btn" href="mailto:gpsupplyandlumber@gmail.com">Email an Order</a>
    <a class="btn" href="https://maps.google.com/?q=Gonsoulin+%26+Price+Supply+%26+Lumber" target="_blank" rel="noopener">Directions</a>
  </section>
</main>
<?php require_once __DIR__ . '/footer.php'; ?>
