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
      'menu_class'    => 'nav-links',
      'menu_id'       => 'menu-mobile',
      'container'     => false
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

  function closeMenu() {
    menu.classList.remove('active');
    toggle.classList.remove('active');
    toggle.setAttribute('aria-expanded', 'false');
  }

  toggle.addEventListener('click', function () {
    const isOpen = menu.classList.toggle('active');
    toggle.classList.toggle('active', isOpen);
    toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  });

  document.addEventListener('click', function (e) {
    if (!menu.classList.contains('active')) return;
    if (menu.contains(e.target) || toggle.contains(e.target)) return;
    closeMenu();
  });

  document.addEventListener('keydown', function (e) {
    if ((e.key === 'Escape' || e.key === 'Esc') && menu.classList.contains('active')) {
      closeMenu();
    }
  });
});
</script>
