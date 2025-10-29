<?php
// nav.php — shared top navigation bar
?>
<header class="site-header">
  <div class="container topbar">
    <a class="brand" href="index.php">
      <img class="brand__logo" src="images/gp-logo.png" alt="Gonsoulin & Price Supply & Lumber logo">
      <h1 class="brand__title">Gonsoulin &amp; Price<br>Supply &amp; Lumber</h1>
    </a>

    <nav class="nav" aria-label="Main">
      <a href="index.php" <?php if (basename($_SERVER['PHP_SELF'])=='index.php') echo 'aria-current="page"'; ?>>Home</a>
      <a href="services.php" <?php if (basename($_SERVER['PHP_SELF'])=='services.php') echo 'aria-current="page"'; ?>>Services</a>
      <a href="about.php" <?php if (basename($_SERVER['PHP_SELF'])=='about.php') echo 'aria-current="page"'; ?>>About</a>
      <a href="contact.php" <?php if (basename($_SERVER['PHP_SELF'])=='contact.php') echo 'aria-current="page"'; ?>>Contact</a>
    </nav>
  </div>
</header>
