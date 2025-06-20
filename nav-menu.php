
<nav class="navbar">
  <div class="container">
    <a href="<?php echo home_url(); ?>" class="logo">Alberto</a>

    <button class="mobile" aria-label="Apri menu" aria-expanded="false" aria-controls="menu-mobile">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>

    <?php
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'menu_class' => 'nav-links',
      'container_class' => false
    ));
    ?>
  </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.querySelector('.mobile');
  const menu = document.querySelector('.nav-links');

  if (!toggle || !menu) {
    console.warn("Elemento toggle o menu non trovato");
    return;
  }

  toggle.addEventListener('click', function () {
    menu.classList.toggle('active');
    toggle.classList.toggle('active');
    toggle.setAttribute('aria-expanded', menu.classList.contains('active') ? 'true' : 'false');
  });
});
</script>
