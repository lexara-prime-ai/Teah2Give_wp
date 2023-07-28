<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Teach2give</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href=<?php echo get_theme_file_uri('/assets/icons/favicon.ico') ?>>
  <!-- NB : Load files -->
  <?php wp_head(); ?>
</head>

<body style="
    background: #ffffff; background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    overflow-x: hidden;
" onscroll="closeSideMenu()">

  <!-- NAVIGATION -->
  <nav class="navigation">
    <!-- LOGO -->
    <img src=<?php echo get_theme_file_uri('/assets/images/logo.png') ?> alt="logo" class="logo" id="logo">

    <!-- NAV LINKS -->
    <ul class="nav-links">
      <li class="link-item">
        <a class="link active" href=<?php echo site_url('/') ?>>
          Home
        </a>
      </li>
      <li class="link-item">
        <a class="link active" href=<?php echo site_url('/about-us') ?>>
          About Us
        </a>
      </li>
      <li class="link-item">
        <a class="link" href="#why-mentor">
          Why Mentor?
        </a>
      </li>
      <li class="link-item">
        <a class="link">
          Blog
        </a>
      </li>

      <!-- CTA -->
      <a class="cta" href=<?php echo site_url('/become-a-mentor') ?>>
        <button class="cta-btn">
          Donate Your Time
          <i class="fa-solid fa-caret-right"></i>
        </button>
      </a>
    </ul>

    <!-- SIDE NAVIGATION -->
    <a class="side-navigation-toggle" onclick="openSideMenu()">
      <i class="bar-icon fa-solid fa-bars"></i>
    </a>
  </nav>

  <!-- SIDE MENU -->
  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSideMenu()">
      &times;
    </a>

    <div class="side-nav-links">
      <a href=<?php echo site_url('/') ?>>
        Home
        <span>
          <i class="fas fa-home"></i>
        </span>
      </a>
      <a href=<?php echo site_url('/about-us') ?>>
        About Us
        <span>
          <i class="fas fa-book"></i>
        </span>
      </a>
      <a href="#why-mentor">
        Why Mentor?
        <span>
          <i class="fas  fa-business-time"></i>
        </span>
      </a>
    </div>
  </div>