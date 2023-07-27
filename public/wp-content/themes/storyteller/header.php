<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head(); ?>
  <!-- NB : Load hosted files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="./style.css" type="text/css">
</head>

<body>
  <!-- NAVIGATION -->
  <nav class="navigation">
    <!-- LOGO -->
    <img src="./assets/images/logo.png" alt="logo" class="logo" id="logo">

    <!-- NAV LINKS -->
    <ul class="nav-links">
      <li class="link-item">
        <a class="link active">
          Home
        </a>
      </li>
      <li class="link-item">
        <a class="link active">
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
      <a class="cta">
        <button class="cta-btn">
          Donate Your Time
          <i class="fa-solid fa-caret-right"></i>
        </button>
      </a>
    </ul>

    <!-- SIDE NAVIGATION -->
    <a class="side-navigation-toggle">
      <i class="bar-icon fa-solid fa-bars"></i>
    </a>
  </nav>