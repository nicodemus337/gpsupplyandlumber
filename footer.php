<?php
// footer.php — shared site footer
?>
<footer class="site-footer">
  <div class="container foot">
    <div>&copy; <span id="y"></span> Gonsoulin &amp; Price Supply &amp; Lumber</div>
    <nav class="nav">
      <a href="index.php">Home</a>
      <a href="services.php">Services</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
    </nav>
  </div>
</footer>

<script>
  document.getElementById('y').textContent = new Date().getFullYear();
</script>
</body>
</html>
