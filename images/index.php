<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Teche Lake Outfitters | Upland Bird Hunts in South Louisiana</title>
  <meta name="description" content="Teche Lake Outfitters offers authentic upland quail hunting on a family-owned property in Iberia Parish. Experience a guided hunt steeped in tradition, land stewardship, and Southern hospitality." />

  <!-- Styles & Fonts -->
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Open+Sans&display=swap" rel="stylesheet">

  <!-- Open Graph -->
  <meta property="og:title" content="Teche Lake Outfitters – South Louisiana Waterfowl & Upland Hunts" />
  <meta property="og:description" content="Private land, wild birds, and real tradition. Book your guided duck and quail hunt at Teche Lake." />
  <meta property="og:image" content="https://techelakeoutfitters.com/images/header/header_logo.png" />
  <meta property="og:url" content="https://techelakeoutfitters.com/" />
  <meta property="og:type" content="website" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Teche Lake Outfitters – South Louisiana Waterfowl & Upland Hunts" />
  <meta name="twitter:description" content="Wild birds. Private land. No gimmicks. Guided hunts on South Louisiana’s Teche Lake." />
  <meta name="twitter:image" content="https://techelakeoutfitters.com/images/header/header_logo.png" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="64x64" href="images/header/2quail.png" />

  <style>
    body {
      margin: 0;
      font-family: 'Open Sans', Arial, sans-serif;
      background: #fcf8f5;
      color: #3c2c1a;
    }
    .hero-banner {
      position: relative;
      background: url('images/gallery/trees_2_pano.jpg') center center/cover no-repeat;
      min-height: 340px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .hero-overlay {
      background: rgba(41, 30, 13, 0.53);
      color: #fff;
      text-align: center;
      width: 100%;
      padding: 4em 1em 3em 1em;
    }
    .hero-title {
      font-family: 'Merriweather', serif;
      font-size: 2.7em;
      margin: 0 0 0.4em 0;
      letter-spacing: 0.04em;
    }
    .hero-subtitle {
      font-size: 1.3em;
      margin: 0;
      letter-spacing: 0.03em;
    }
    main {
      max-width: 700px;
      margin: 2em auto 0 auto;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(41,30,13,0.07);
      padding: 2em 1.5em;
    }
    h2 {
      font-family: 'Merriweather', serif;
      font-size: 1.45em;
      color: #5c4e3d;
      margin-top: 1.4em;
    }
    .webcopy p {
      font-size: 1.08em;
      line-height: 1.65;
      margin-bottom: 1.4em;
    }
    @media (max-width: 600px) {
      .hero-title { font-size: 1.4em; }
      .hero-subtitle { font-size: 1em; }
      main { padding: 1em 0.75em; }
    }
  </style>
</head>

<body>

<?php include 'header.php'; ?>

<!-- Hero Banner -->
<section class="hero-banner">
  <div class="hero-overlay">
    <h1 class="hero-title">Welcome to Teche Lake Outfitters</h1>
    <p class="hero-subtitle">Explore Louisiana's Wild Side.</p>
  </div>
</section>

<main id="main">

  <!-- Intro -->
  <section class="intro webcopy" style="text-align: center;">
    <h2>Premiere Guided Hunts in South Louisiana</h2>
    <p>
      Teche Lake Outfitters invites you to discover some of the most memorable quail hunting South Louisiana has to offer.
      Our hunts take place on family land shaped by generations of stewardship—oak woods, native grasses, and open water,
      all woven together by the slow bend of Bayou Teche.
    </p>
  </section>

  <!-- Two-column layout -->
  <div class="kansas-layout">
    <div class="kansas-image-stack">
      <div class="kansas-imgbox">
        <img src="images/gallery/truck.hunt.png" alt="South Louisiana quail hunting guides" />
      </div>
      <div class="kansas-imgbox">
        <img src="images/gallery/saloon.hero.png" alt="Guided upland bird hunt in Louisiana" />
      </div>
    </div>

    <div class="intro webcopy">
      <p>
        We aren’t a game farm and we don’t run a lodge built for volume. Birds are released ahead of time
        to keep the hunt wild and honest—never at your feet and never for show.
      </p>
      <p>
        You’ll hunt across managed fields and quiet woods where coveys flush hard and every point is earned.
        You might see white-tailed deer along the timber edge, hear wood ducks down the bayou,
        or spot a marsh hawk overhead.
      </p>
      <p>
        We work with families, solo hunters, and small groups who want the real experience—no shortcuts,
        no crowds, just honest hunting and true hospitality.
      </p>
    </div>
  </div>

  <!-- Closing CTA -->
  <section class="intro webcopy" style="text-align: center;">
    <p>
      If you’re looking for something a little more personal,
      <a href="mailto:techelakeoutfittersllc@gmail.com">let us know</a>.
      We’re happy to build a hunt around your needs or your story.
    </p>
    <p style="font-weight: bold; margin-top: 2em;">
      Teche Lake Outfitters — where upland tradition meets Louisiana heart.
    </p>
    <a href="about.php" class="cta-btn">About Us</a>
  </section>

</main>

<?php include 'footer.php'; ?>

</body>
</html>
