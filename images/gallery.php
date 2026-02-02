<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gallery | Teche Lake Outfitters</title>
  <link rel="stylesheet" href="style.css?v=3" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
<!-- Favicon -->
  <link rel="icon" type="image/png" sizes="64x64" href="images/header/2quail.png" />

  <!-- Glider.js CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>
  <section class="about-section webcopy">
    <h2>Field Notes</h2>
    <p style="max-width:700px; margin:0;">
      These are the sights that greet us at dawn — bayous wrapped in fog, dogs on scent, trees leaning into the wind. 
      All photos are taken on-site by those who walk this land.
    </p>
  </section>
  
  <section class="gallery-slider" style="max-width:900px; margin:0 auto; padding:0">
    <div class="glider-contain">
      <div class="glider">
        <?php
          $images = glob("images/gallery/*.{jpg,JPG,jpeg,png}", GLOB_BRACE);
          foreach ($images as $img) {
            echo '<div><img src="' . $img . '" alt="" loading="lazy" style="width:100%; border-radius:1px; box-shadow:0 2px 5px rgba(0,0,0,0.12);"></div>';
          }
        ?>
      </div>
      <button class="glider-prev" aria-label="Previous">«</button>
      <button class="glider-next" aria-label="Next">»</button>
      <div role="tablist" class="dots"></div>
    </div>
    <div style="text-align:center; margin-top:2em;">
  <p style="font-size:1.1em;">Want to experience it for yourself?</p>
  <a href="https://techelakeoutfitters.setmore.com/" class="cta-btn">Check Availability</a>
</div>

  </section>
</main>

<?php include 'footer.php'; ?>

<!-- Glider.js JS -->
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
<script>
  new Glider(document.querySelector('.glider'), {
    slidesToShow: 1,
    dots: '.dots',
    draggable: true,
    arrows: {
      prev: '.glider-prev',
      next: '.glider-next'
    }
  });
</script>

</body>
</html>
