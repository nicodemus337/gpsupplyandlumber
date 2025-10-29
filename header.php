
<?php
$GLOBALS['SITE'] = [
  'brand'        => 'G&P Supply Co',
  'legalName'    => 'Gonsoulin Price Supply & Lumber',
  'baseUrl'      => 'https://gpsupplyandlumber.com',
  'city'         => 'Loreauville',
  'region'       => 'LA',
  'country'      => 'US',
  'logo'         => '/images/ico.png',
  'ogImage'      => '/images/ico.png',
  'phone'        => '+1-337-229-4224',
  'facebook'     => 'https://www.facebook.com/gpsupplyandlumber',
  'instagram'    => 'https://www.instagram.com/gpsupplylumber',
  'googleMaps'   => 'https://maps.google.com/?q=G%26P+Supply+Co+Loreauville',
  'ga4'          => 'G-HRPFJS6NRD',
  'metaPixel'    => '1394963538626041',
  'env'          => 'prod',
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo $META['title'] ?? 'G&P Supply Co — Loreauville Hardware & Lumber'; ?></title>
  <meta name="description" content="<?php echo $META['desc'] ?? 'Locally owned hardware & lumber in Loreauville, LA. Tools, fasteners, paint, and more.'; ?>" />
  <link rel="icon" href="/images/ico.png" type="image/png" />

  <!-- Open Graph / Twitter -->
  <meta property="og:image" content="/images/ico.png" />
  <meta property="og:title" content="<?php echo $META['title'] ?? 'G&P Supply Co'; ?>" />
  <meta property="og:description" content="<?php echo $META['desc'] ?? ''; ?>" />
  <meta property="og:type" content="website" />

  <!-- Google tag (GA4) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-HRPFJS6NRD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-HRPFJS6NRD');
  </script>

  <!-- Meta Pixel -->
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1394963538626041'); fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1394963538626041&ev=PageView&noscript=1" /></noscript>

  <link rel="stylesheet" href="/assets/css/style.css" />
</head>
<body>
<header class="site-header">
  <div class="container header-grid">
    <a href="/" class="brand">
      <img src="/images/ico.png" alt="G&P Supply Co" class="brand-logo" />
      <span>G&P Supply Co</span>
    </a>
    <nav>
      <ul>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/services.php">Services</a></li>
        <li><a href="/about.php">About</a></li>
        <li><a href="/contact.php">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>

# --- FILE: /index.php
<?php $META = [ 'title' => 'G&P Supply Co — Loreauville Hardware & Lumber', 'desc' => 'Locally owned hardware & lumber in Loreauville,