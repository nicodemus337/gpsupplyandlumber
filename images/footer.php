<?php
// lodging.php — Teche Lake Outfitters
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Lodging — Teche Lake Outfitters</title>
  <meta name="description" content="Nearby lodging options for guests hunting with Teche Lake Outfitters. Comfortable accommodations close to the hunt." />
  <meta name="theme-color" content="#5c4e3d" />

  <link rel="stylesheet" href="style.css" />
</head>

<body>

<?php include 'header.php'; ?>

<main id="main">

  <!-- Page Hero -->
  <section class="gp-page-hero">
    <div class="gp-shell">
      <h1 class="gp-page-title">Lodging</h1>
      <p class="gp-page-sub">
        Simple, comfortable accommodations nearby for guests hunting with Teche Lake Outfitters.
      </p>
    </div>
  </section>

  <!-- Content -->
  <section class="gp-page">
    <div class="gp-shell" style="max-width: 720px;">

      <div class="gp-block">
        <h2>Nearby Guest House</h2>

        <p>
          For hunters traveling in from out of town, we recommend the following nearby lodging option.
          It’s well-suited for early mornings, small groups, and multi-day hunts.
        </p>

        <ul class="gp-list">
          <li>Private, full-home accommodation</li>
          <li>Comfortable for individuals or small groups</li>
          <li>Short drive to hunt locations</li>
        </ul>

        <p style="opacity: 0.85;">
          Lodging is booked separately and is not owned or operated by Teche Lake Outfitters.
          Availability, pricing, and house rules are managed directly by the host.
        </p>

        <div style="margin: 1.5em 0; display: flex; gap: 0.75em; flex-wrap: wrap;">
          <a
            class="gp-btn gp-btn--solid"
            href="https://www.airbnb.com/rooms/40398248?viralityEntryPoint=1&s=76&source_impression_id=p3_1769786276_P30hbOsQdE4XSPMK"
            target="_blank"
            rel="noopener">
            View lodging on Airbnb
          </a>

          <a class="gp-btn gp-btn--ghost" href="contact.php">
            Questions about your stay
          </a>
        </div>
      </div>

      <div class="gp-divider"></div>

      <div class="gp-block">
        <h3>Planning your trip</h3>
        <p>
          If you’re booking a hunt and need help coordinating dates with lodging,
          feel free to reach out before you reserve.
        </p>
        <p>
          <strong>Note:</strong> Hunt bookings and lodging reservations are handled separately.
        </p>
      </div>

    </div>
  </section>

</main>

<?php include 'footer.php'; ?>

</body>
</html>
