<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Admin panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" href="css/styles.min.css" />
</head>
<body>

  <!-- Preloader -->
  <div class="preloader"></div>

  <!-- Sidebar menu -->
  <section class="sidebar">
    <div class="sidebar-menu">
      <div class="sidebar-logo">
        <h1 class="text-center site-header"><span>Tele</span>numer</h1>
      </div>
      <ul class="sidebar-nav">
        <li><a class="active" href="index.php">
          <i class="fa fa-pie-chart" aria-hidden="true"></i>
          <p>Dashboard</p>
        </a></li>
        <li><a href="stats.php">
          <i class="fa fa-bar-chart" aria-hidden="true"></i>
          <p>Statystyki</p>
        </a></li>
        <li><a href="phone-numbers.php">
          <i class="fa fa-tablet" aria-hidden="true"></i>
          <p>Lista numerów</p>
        </a></li>
        <li><a href="block.php">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <p>Blokowanie IP</p>
        </a></li>
        <li><a href="logs.php">
          <i class="fa fa-area-chart" aria-hidden="true"></i>
          <p>Logi</p>
        </a></li>
      </ul>
      <div class="sidebar-footer">
        <p class="text-center">© 2017 site by <a href="https://www.facebook.com/radek.wawrzyk">Radziu</a> and <a href="https://www.facebook.com/kamil.haniewicz.3">Kamil</a></p>
      </div>
    </div>
  </section>

  <!-- Page content -->
  <main class="main-panel">
    <nav class="navigation">
      <button class="toggle-navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="nav-site-header ">
        <h2 class="site-header">Witaj w panelu zarządzania!</h2>
      </div>
    </nav>
