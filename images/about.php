<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Teche Lake Outfitters | Our Story & Values</title>
  <meta name="description" content="Meet your hosts and learn the South Louisiana ranch-and-hunt tradition behind Teche Lake Outfitters: land stewardship, conservation, and real hospitality." />
  <link rel="canonical" href="https://techelakeoutfitters.com/about.php" />

  <!-- Open Graph -->
  <meta property="og:title" content="Teche Lake Outfitters – Our Story & Values" />
  <meta property="og:description" content="Meet the guides, family, and stewardship legacy behind Teche Lake Outfitters. Learn about our South Louisiana hunting grounds, tradition, and values." />
  <meta property="og:image" content="https://techelakeoutfitters.com/images/header/header_logo.png" />
  <meta property="og:url" content="https://techelakeoutfitters.com/about.php" />
  <meta property="og:type" content="website" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Teche Lake Outfitters – Our Story & Values" />
  <meta name="twitter:description" content="The story and stewardship behind Louisiana's most memorable upland hunting experience." />
  <meta name="twitter:image" content="https://techelakeoutfitters.com/images/header/header_logo.png" />

  <!-- CSS & Fonts -->
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Open+Sans&family=Anton&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="64x64" href="images/header/2quail.png" />
</head>
<body>
<?php include 'header.php'; ?>

<!-- Main Content -->
<main>
  <!-- Map -->
  <section class="location-section">
    <div id="map" style="width: 100%; max-width: 1100px; height: 430px; margin: 2em auto; border-radius: 18px; box-shadow: 0 2px 18px rgba(40,32,16,0.09); border: 2px solid #bfa87c;"
         role="region" aria-label="Map of Teche Lake Outfitters property"></div>
  </section>

  <!-- About -->
  <section class="about-section webcopy">
    <h2>About Teche Lake Outfitters</h2>

    <p>
      Whether you’re a seasoned upland hunter or chasing birds for the first time, our aim is simple: give you a South Louisiana hunt you’ll remember. No shortcuts, no crowds—just honest hunting, good dogs, and real hospitality.
    </p>

    <h3>Our Mission</h3>
    <p>
      At Teche Lake Outfitters, tradition connects ranch and hunt. The same respect that raises cattle on grassland guides us in the field: land stewardship, wildlife conservation, and authentic Louisiana heritage. We offer more than a hunt—we invite you into a living tradition.
    </p>

    <h3>Meet Your Hosts</h3>

    <h4>Shannon Gonsoulin</h4>
    <p>
      A lifelong outdoorsman and cattle rancher, Shannon brings deep roots in South Louisiana’s land and wildlife traditions. With decades of experience managing family land and guiding others across it, he combines practical know-how with a true love of the hunt. Shannon ensures every guest experience reflects authenticity, safety, and respect for the field.
    </p>

    <h4>Jaimie Johns</h4>
    <p>
      Jaimie is both the organizational backbone of Teche Lake Outfitters and an avid outdoorsman in his own right. When he’s not keeping hunts in South Louisiana running smoothly, he’s guiding upland bird hunts in Kansas. A hunter who loves working with dogs, Jaimie brings that same field-first passion to hospitality—making sure every detail of your hunt is seamless, efficient, and guest-centered.
    </p>

 

    <h3>Beyond Louisiana</h3>
    <p>
      Our roots run deep in Louisiana, and parts of our team also guide in Kansas during the season. If you’d like to plan an out-of-state trip with the same dogs, guides, and attention to detail, we’re happy to help.
    </p>
    <div class="local-explore">
      <div class="local-btns">
        <a class="local-btn" href="https://www.uplandbirdguideservice.com/" target="_blank" rel="noopener noreferrer">
          Hunt With Us in Kansas
        </a>
      </div>
    </div>

    <p>
      We believe in honest hunting, land stewardship, and Southern hospitality. We look forward to welcoming you to our corner of the world.
    </p>

    <div style="text-align: center; margin-top: 1rem;">
      <a href="hunts.php" class="cta-btn">View Hunts</a>
      <a href="booking.php" class="cta-btn" style="margin-left: 0.5rem;">Book Your Hunt</a>
    </div>
  </section>
</main>

<!-- Footer -->
<?php include 'footer.php'; ?>

<!-- Mapbox -->
<script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
<script>
  mapboxgl.accessToken = 'pk.eyJ1Ijoibmljb2RlbXVzIiwiYSI6ImNtYjZoZW4wbzAwdTUybnB4eThhaG5vNTIifQ.BspwB5AAGcVp9Gka4IqiUg';

  fetch('techelake.geojson')
    .then(response => response.json())
    .then(data => {
      const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/satellite-streets-v12',
        center: [-91.714722, 30.024722],
        zoom: 12,
        attributionControl: false
      });

      map.addControl(new mapboxgl.NavigationControl());

      map.on('load', () => {
        map.addSource('property', { type: 'geojson', data });

        map.addLayer({
          id: 'property-fill',
          type: 'fill',
          source: 'property',
          paint: { 'fill-color': '#FFD700', 'fill-opacity': 0.19 }
        });

        map.addLayer({
          id: 'property-outline',
          type: 'line',
          source: 'property',
          paint: { 'line-color': '#FF4500', 'line-width': 3.5 }
        });

        // Fit bounds to the first feature (assumes Polygon)
        const bounds = new mapboxgl.LngLatBounds();
        try {
          (data.features?.[0]?.geometry?.coordinates?.[0] || []).forEach(coord => bounds.extend(coord));
          map.fitBounds(bounds, { padding: 50, duration: 1400 });

          const center = bounds.getCenter();
          new mapboxgl.Marker({ color: '#d62828' })
            .setLngLat([center.lng, center.lat])
            .setPopup(new mapboxgl.Popup().setText('Teche Lake Outfitters'))
            .addTo(map);
        } catch (e) {
          console.warn('Could not compute bounds for property geojson:', e);
        }
      });
    })
    .catch(e => {
      document.getElementById('map').innerHTML = "<p style='color:#944; padding:1rem;'>Unable to load map.</p>";
      console.error(e);
    });
</script>

</body>
</html>
