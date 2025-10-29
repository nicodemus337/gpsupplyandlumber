<?php

$GLOBALS['SITE'] = [
  'brand'        => 'G&P Supply Co',
  'legalName'    => 'Gonsoulin Price Supply & Lumber',
  'baseUrl'      => 'https://gpsupplyandlumber.com',
  'city'         => 'Loreauville',
  'region'       => 'LA',
  'country'      => 'US',
  'logo'         => '/assets/img/logo.png',
  'ogImage'      => '/assets/img/og-default.jpg', // 1200x630
  'phone'        => '+1-000-000-0000',            // TODO
  'facebook'     => 'https://www.facebook.com/yourpage', // TODO
  'instagram'    => 'https://www.instagram.com/yourhandle', // TODO
  'googleMaps'   => 'https://maps.google.com/?q=G%26P+Supply+Co+Loreauville',
  'ga4'          => 'G-XXXXXXXXXX',               // TODO: GA4 Measurement ID
  'metaPixel'    => '1394963538626041',           // Provided by user
  'env'          => 'prod',                       // 'prod' or 'stage'
];

// ---------- Per-page overrides (optional) ----------
// Before including this file, set $META = [ 'title' => '...', 'desc' => '...', 'path' => '/about.html', 'image' => '/assets/img/about-hero.jpg', 'robots' => 'index,follow' ];
if (!isset($META)) { $META = []; }

// ---------- Helpers ----------
function e($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
function site($k,$d=null){ return $GLOBALS['SITE'][$k] ?? $d; }
function meta($k,$d=''){ global $META; return $META[$k] ?? $d; }
function full_url($path){
  $base = rtrim(site('baseUrl'), '/');
  if (!$path) return $base.'/';
  if (str_starts_with($path, 'http')) return $path;
  return $base . '/' . ltrim($path, '/');
}

// Sensible fallbacks
$path     = meta('path', $_SERVER['REQUEST_URI'] ?? '/');
$title    = meta('title', 'G&P Supply Co — Loreauville Hardware & Lumber');
$desc     = meta('desc', 'Locally owned hardware & lumber in Loreauville, LA. Tools, fasteners, lumber, paint, and friendly service. The hardware store you can always count on.');
$ogImage  = full_url(meta('image', site('ogImage')));
$canonical= full_url(meta('canonical', $path));
$robots   = meta('robots', site('env') === 'stage' ? 'noindex,nofollow' : 'index,follow');

?><!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php echo e($title); ?></title>
  <meta name="description" content="<?php echo e($desc); ?>" />
  <link rel="canonical" href="<?php echo e($canonical); ?>" />
  <meta name="robots" content="<?php echo e($robots); ?>" />

  <!-- Open Graph -->
  <meta property="og:site_name" content="<?php echo e(site('brand')); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo e($canonical); ?>" />
  <meta property="og:title" content="<?php echo e($title); ?>" />
  <meta property="og:description" content="<?php echo e($desc); ?>" />
  <meta property="og:image" content="<?php echo e($ogImage); ?>" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo e($title); ?>" />
  <meta name="twitter:description" content="<?php echo e($desc); ?>" />
  <meta name="twitter:image" content="<?php echo e($ogImage); ?>" />

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png" />
  <link rel="manifest" href="/site.webmanifest" />

  <!-- Preconnects -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <!-- Styles -->
  <link rel="stylesheet" href="/assets/css/style.css?v=1" />

  <!-- JSON-LD: Organization -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"Organization",
    "name":<?php echo json_encode(site('brand')); ?>,
    "legalName":<?php echo json_encode(site('legalName')); ?>,
    "url":<?php echo json_encode(site('baseUrl')); ?>,
    "logo":<?php echo json_encode(full_url(site('logo'))); ?>,
    "address":{"@type":"PostalAddress","addressLocality":<?php echo json_encode(site('city')); ?>,"addressRegion":<?php echo json_encode(site('region')); ?>,"addressCountry":<?php echo json_encode(site('country')); ?>},
    "sameAs":[<?php echo json_encode(site('facebook')); ?>,<?php echo json_encode(site('instagram')); ?>,<?php echo json_encode(site('googleMaps')); ?>],
    "contactPoint":[{"@type":"ContactPoint","telephone":<?php echo json_encode(site('phone')); ?>,"contactType":"customer service"}]
  }
  </script>

  <!-- JSON-LD: WebSite -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"WebSite",
    "url":<?php echo json_encode(site('baseUrl')); ?>,
    "name":<?php echo json_encode(site('brand')); ?>,
    "potentialAction":{"@type":"SearchAction","target":"<?php echo e(full_url('/search?q={query}')); ?>","query-input":"required name=query"}
  }
  </script>

  <!-- GA4 (loads only in prod + when consent is granted or not required) -->
  <script>
    (function(){
      var consent = localStorage.getItem('gpsupply-consent');
      var allow = (consent === 'granted') || !('gpsupplyConsentRequired' in window);
      var prod = <?php echo json_encode(site('env')==='prod'); ?>;
      var id = <?php echo json_encode(site('ga4')); ?>;
      if (prod && id && allow) {
        var s = document.createElement('script');
        s.async = true; s.src = 'https://www.googletagmanager.com/gtag/js?id=' + id; document.head.appendChild(s);
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);} window.gtag = gtag;
        gtag('js', new Date()); gtag('config', id, { 'anonymize_ip': true });
      }
    })();
  </script>

  <!-- Meta Pixel (always present; gate init on consent if required) -->
  <script>
    (function(){
      var initPixel = function(){
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo e(site('metaPixel')); ?>');
        fbq('track', 'PageView');
      };
      var consent = localStorage.getItem('gpsupply-consent');
      if ((typeof window.gpsupplyConsentRequired === 'undefined') || consent === 'granted') {
        initPixel();
      }
    })();
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" alt=""
         src="https://www.facebook.com/tr?id=<?php echo e(site('metaPixel')); ?>&ev=PageView&noscript=1" />
  </noscript>

  <!-- Minimal consent stub (replace with your banner if needed) -->
  <script>
    // If you need explicit consent, set window.gpsupplyConsentRequired = true earlier
    // and implement a real banner that sets localStorage 'gpsupply-consent' to 'granted'.
  </script>
</head>
<body>
<header class="site-header">
  <div class="container header-grid">
    <a href="/" class="brand">
      <img src="/assets/img/logo.svg" alt="<?php echo e(site('brand')); ?>" class="brand-logo" />
      <span class="brand-text"><?php echo e(site('brand')); ?></span>
    </a>

    <nav class="main-nav" aria-label="Primary">
      <?php $p = parse_url($path, PHP_URL_PATH) ?: '/'; ?>
      <ul>
        <li><a href="/services.html" class="nav-link <?php echo ($p==='/services.html'||$p==='/services/')?'active':''; ?>">Services</a></li>
        <li><a href="/about.html" class="nav-link <?php echo ($p==='/about.html'||$p==='/about/')?'active':''; ?>">About</a></li>
        <li><a href="/contact.html" class="nav-link <?php echo ($p==='/contact.html'||$p==='/contact/')?'active':''; ?>">Contact</a></li>
      </ul>
    </nav>

    <div class="social">
      <a aria-label="Facebook" href="<?php echo e(site('facebook')); ?>" rel="me noopener" target="_blank">
        <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.2l-.4 3h-1.8v7A10 10 0 0 0 22 12"/></svg>
      </a>
      <a aria-label="Instagram" href="<?php echo e(site('instagram')); ?>" rel="me noopener" target="_blank">
        <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 1.9.2 2.4.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.5.4 1.2.4 2.4.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.2 1.9-.4 2.4-.2.6-.5 1-1 1.4-.4.4-.8.7-1.4.9-.5.2-1.2.4-2.4.4-1.3.1-1.7.1-4.9.1s-3.5 0-4.7-.1c-1.2-.1-1.9-.2-2.4-.4a3.7 3.7 0 0 1-1.4-.9 3.7 3.7 0 0 1-.9-1.4c-.2-.5-.4-1.2-.4-2.4C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.9c.1-1.2.2-1.9.4-2.4.2-.6.5-1 1-1.4.4-.4.8-.7 1.4-.9.5-.2 1.2-.4 2.4-.4C8.4 2.2 8.8 2.2 12 2.2Zm0 1.8c-3.1 0-3.5 0-4.7.1-1 0-1.6.2-1.9.3-.5.2-.8.4-1.1.7-.3.3-.5.7-.7 1.1-.1.3-.3.9-.3 1.9-.1 1.2-.1 1.6-.1 4.7s0 3.5.1 4.7c0 1 .2 1.6.3 1.9.2.5.4.8.7 1.1.3.3.7.5 1.1.7.3.1.9.3 1.9.3 1.2.1 1.6.1 4.7.1s3.5 0 4.7-.1c1 0 1.6-.2 1.9-.3.5-.2.8-.4 1.1-.7.3-.3.5-.7.7-1.1.1-.3.3-.9.3-1.9.1-1.2.1-1.6.1-4.7s0-3.5-.1-4.7c0-1-.2-1.6-.3-1.9-.2-.5-.4-.8-.7-1.1-.3-.3-.7-.5-1.1-.7-.3-.1-.9-.3-1.9-.3-1.2-.1-1.6-.1-4.7-.1Zm0 3.1a6.9 6.9 0 1 1 0 13.8 6.9 6.9 0 0 1 0-13.8Zm0 2.2a4.7 4.7 0 1 0 0 9.4 4.7 4.7 0 0 0 0-9.4Zm5.4-.8a1.2 1.2 0 1 1 0 2.5 1.2 1.2 0 0 1 0-2.5Z"/></svg>
      </a>
      <a aria-label="Google Maps" href="<?php echo e(site('googleMaps')); ?>" rel="noopener" target="_blank">
        <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7Zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5Z"/></svg>
      </a>
    </div>
  </div>
</header>

<!-- Optional: small inline CSS (move to /assets/css/style.css in prod) -->
<style>
  .site-header { position: sticky; top: 0; z-index: 1000; background:#fff; border-bottom:1px solid #eee; }
  .header-grid { display:grid; grid-template-columns: 1fr auto auto; align-items:center; gap:1rem; padding:.8rem 1rem; max-width:1100px; margin:0 auto; }
  .brand { display:flex; align-items:center; gap:.6rem; text-decoration:none; color:#111; font-weight:600; }
  .brand-logo { height:36px; width:auto; }
  .main-nav ul { display:flex; list-style:none; gap:1rem; margin:0; padding:0; }
  .nav-link { text-decoration:none; color:#333; padding:.4rem .6rem; border-radius:.5rem; }
  .nav-link.active, .nav-link:hover { background:#f4f4f5; }
  .social a { display:inline-flex; align-items:center; justify-content:center; margin-left:.5rem; }
  .social svg { fill:#333; }
  @media (max-width: 720px){ .header-grid { grid-template-columns: 1fr auto; } .main-nav { grid-column: 1 / -1; } }
</style>
