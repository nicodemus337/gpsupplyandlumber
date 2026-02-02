<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header class="site-header">
  <!-- Logo Bar (white background, full width) -->
  <div class="header-logo-bar">
    <img src="images/header/header_logo.png" alt="Teche Lake Outfitters Logo" class="header-logo-full" />
  </div>

  <!-- Navigation -->
  <div class="header-nav-wrap">
    <nav class="main-nav">
      <a href="index.php" class="<?= $current_page === 'index.php' ? 'active' : '' ?>">Home</a>
      <a href="about.php" class="<?= $current_page === 'about.php' ? 'active' : '' ?>">About</a>
      <a href="hunts.php" class="<?= $current_page === 'hunts.php' ? 'active' : '' ?>">Hunts</a>
      <a href="lodging.php" class="<?= $current_page === 'lodging.php' ? 'active' : '' ?>">Lodging</a>
      <a href="booking.php" class="<?= $current_page === 'booking.php' ? 'active' : '' ?>">Booking</a>
      <a href="gallery.php" class="<?= $current_page === 'gallery.php' ? 'active' : '' ?>">Gallery</a>
      <a href="contact.php" class="<?= $current_page === 'contact.php' ? 'active' : '' ?>">Contact</a>
      <a href="waiver.php" class="<?= $current_page === 'waiver.php' ? 'active' : '' ?>">Waiver</a>
    </nav>
  </div>
</header>
