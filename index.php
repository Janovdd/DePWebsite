<?php $page = "home" ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php include "modules/head.php" ?>

</head>

<body>

  <?php include "modules/navbar.php" ?>

  <header>
    <div class="container" id="home">
      <div class="row">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto align-self-center">
          <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="mx-auto">
            <source src="video/PromoFacebook.mp4" type="video/mp4">
          </video>
          <div class="general img-fluid animate__animated animate__bounceInUp col-3 d-none d-lg-block">
            <img class="" src="/images/Commander.png" alt="Image Gallery">
          </div>
        </div>
      </div>
    </div>
  </header>

  <a href="https://play.google.com/store/apps/details?id=com.IdleCompany.DontEatPete&hl=en&gl=US" target="_blank" class="download-button"><img src="/images/en_badge_web_generic (1).png" class="img-fluid"></a>

  <section id="about">
    <div class="container pt-0">
      <div class="row">
        <div class="col-12 text-center card-intro">
          <a class="h3" href="https://play.google.com/store/apps/details?id=com.IdleCompany.DontEatPete&hl=en&gl=US" target="_blank">Download it now on Google Play</a>
          <h1>Don't eat Pete - Zombie Survival</h1>
          <p>Help Pete survive against hordes of zombies in this fun, top down, twin stick shooter, android
            game. </p>
        </div>
        <div class="col-12 col-md-4 mt-4 pl-0 pr-3 text-center">
          <div class="card p-0">
            <img src="images/Waves.jpg" class="card-img-top px-0 " alt="survival screenshot">
            <div class="card-body p-4 h-100">
              <h3>Survive</h3>
              <p>Defeat waves of zombies that will become increasingly more difficult. You will encounter
                all
                kinds of undead, all with their own unique abilities and powers.</p>
              <button type="button" class="btn btn-outline-secondary mt-4">Secondary</button>

            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mt-4 pl-2 pr-2 text-center">
          <div class="card p-0">
            <img src="images/Waves.jpg" class="card-img-top px-0 " alt="survival screenshot">
            <div class="card-body p-4 h-100">
              <h3>Survive</h3>
              <p>Defeat waves of zombies that will become increasingly more difficult. You will encounter
                all
                kinds of undead, all with their own unique abilities and powers.</p>
              <button type="button" class="btn btn-outline-secondary mt-4">Secondary</button>

            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mt-4 pl-3 pr-0 text-center">
          <div class="card p-0">
            <img src="images/Waves.jpg" class="card-img-top px-0 " alt="survival screenshot">
            <div class="card-body p-4 h-100">
              <h3>Survive</h3>
              <p>Defeat waves of zombies that will become increasingly more difficult. You will encounter
                all
                kinds of undead, all with their own unique abilities and powers.</p>
              <button type="button" class="btn btn-outline-secondary mt-4">Secondary</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="defenses">
    <div class="container pt-4">
      <div class="row mb-3 mt-0">
        <div class="col-12 text-center">
          <h2 class="h1">Maps</h2>
          <h3>Get a look into the playable maps in Don't eat Pete</h3>
        </div>
      </div>
      <div class="container pt-4 pb-0">
        <div class="row mb-3 mt-0">
          <div class="owl-carousel owl-theme items h-100">
            <a href="/images/Maps/MapsPromoForest.jpg" data-fancybox="gallery">
              <img src="/images/Maps/MapsPromoForest.jpg" alt="Image Gallery" class="img-responsive">
            </a>
            <a href="/images/Maps/MapsPromoBeach.jpg" data-fancybox="gallery">
              <img src="/images/Maps/MapsPromoBeach.jpg" alt="Image Gallery" class="img-responsive">
            </a>
            <a href="/images/Maps/MapsPromoHighway.jpg" data-fancybox="gallery">
              <img src="/images/Maps/MapsPromoHighway.jpg" alt="Image Gallery" class="img-responsive">
            </a>
        </div>
      </div>
  </section>

  <?php include "modules/beta.php" ?>

  <?php include "modules/footer.php" ?>

  <?php include "modules/scripts.php" ?>
</body>

</html>