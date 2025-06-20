  <footer>
    <p>&copy; <?php echo date('Y'); ?> Alberto G – Grazie per aver letto</p>
  </footer>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php include('nav-menu.php')?>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector(".mobile");
    const menu = document.querySelector(".nav-links");

    toggle.addEventListener("click", function () {
      menu.classList.toggle("active");
    });
  });
</script>
<?php wp_footer();?>
</body>
</html>
