<?php $page = "build" ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php include "modules/head.php" ?>

</head>

<body>

  <?php include "modules/navbar.php" ?>

  <header class="header-small">
    <h2 class="title text-center">Build</h2>
  </header>

  <a href="https://play.google.com/store/apps/details?id=com.IdleCompany.DontEatPete&hl=en&gl=US" target="_blank" class="download-button"><img src="/images/en_badge_web_generic (1).png" class="img-fluid"></a>

  <section id="about">
    <div class="container pt-0">
      <div class="row">
        <div class="col-12 text-center card-intro px-5">
          <h1>Build in Don't eat Pete</h1>
          <p>Defend the safehouses by building defensive structures. Use walls to hold the undead back and use the turrets to finish them off. Place traps which have different status effects to stun, poison or damage the walking dead. Unlock new defenses by completing levels and use duplicates to upgrade them. Upgrading your defenses will make them stronger and last longer.</p>
          <a class="btn btn-outline-secondary mt-3 mx-auto" href="#defenses">Look at defenses</a>
        </div>
      </div>
    </div>
  </section>
  <section id="defenses">
    <div class="container pt-4">
      <div class="row mb-3 mt-0">
        <div class="col-12 text-center">
          <h2 class="h1">Defenses</h2>

        </div>
      </div>
      <div class="row mb-3 mt-0">
        <div class="col-12 text-center">
          <div class="button-group filters-button-group">
            <button class=" is-checked btn btn-outline-defense " data-filter="*">All</button>
            <button class=" btn btn-outline-defense " data-filter=".turret">Turrets</button>
            <button class=" btn btn-outline-defense " data-filter=".wall">Walls</button>
            <button class=" btn btn-outline-defense " data-filter=".trap">Traps</button>
          </div>
        </div>
      </div>
      <div class="row defenses items">
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense turret item" data-category="transition">
          <a href="/images/defenses/AssaultTurret.jpg" data-fancybox="gallery">
            <img src="/images/defenses/AssaultTurret.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense trap item">
          <a href="/images/defenses/Bearclaw.jpg" data-fancybox="gallery">
            <img src="/images/defenses/Bearclaw.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense wall item">
          <a href="/images/defenses/BrickWall.jpg" data-fancybox="gallery">
            <img src="/images/defenses/BrickWall.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense turret item">
          <a href="/images/defenses/CrossbowTurret.jpg" data-fancybox="gallery">
            <img src="/images/defenses/CrossbowTurret.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense trap item">
          <a href="/images/defenses/ElectricityTrap.jpg" data-fancybox="gallery">
            <img src="/images/defenses/ElectricityTrap.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense wall item">
          <a href="/images/defenses/ElectricityWall.jpg" data-fancybox="gallery">
            <img src="/images/defenses/ElectricityWall.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense wall item">
          <a href="/images/defenses/Fence.jpg" data-fancybox="gallery">
            <img src="/images/defenses/Fence.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense turret item">
          <a href="/images/defenses/FireTrap.jpg" data-fancybox="gallery">
            <img src="/images/defenses/FireTrap.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense turret item">
          <a href="/images/defenses/FlamethrowerTurret.jpg" data-fancybox="gallery">
            <img src="/images/defenses/FlamethrowerTurret.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense turret item">
          <a href="/images/defenses/LaserTurret.jpg" data-fancybox="gallery">
            <img src="/images/defenses/LaserTurret.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense wall item">
          <a href="/images/defenses/LaserWall.jpg" data-fancybox="gallery">
            <img src="/images/defenses/LaserWall.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense wall item">
          <a href="/images/defenses/MetalWall.jpg" data-fancybox="gallery">
            <img src="/images/defenses/MetalWall.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense trap item">
          <a href="/images/defenses/Mine.jpg" data-fancybox="gallery">
            <img src="/images/defenses/Mine.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense turret item">
          <a href="/images/defenses/PistolTurret.jpg" data-fancybox="gallery">
            <img src="/images/defenses/PistolTurret.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense trap item">
          <a href="/images/defenses/PoisonTrap.jpg" data-fancybox="gallery">
            <img src="/images/defenses/PoisonTrap.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense wall item">
          <a href="/images/defenses/PoisonWall.jpg" data-fancybox="gallery">
            <img src="/images/defenses/PoisonWall.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense turret item">
          <a href="/images/defenses/ShotgunTurret.jpg" data-fancybox="gallery">
            <img src="/images/defenses/ShotgunTurret.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense turret item">
          <a href="/images/defenses/SniperTurret.jpg" data-fancybox="gallery">
            <img src="/images/defenses/SniperTurret.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense trap item">
          <a href="/images/defenses/SpikeTrap.jpg" data-fancybox="gallery">
            <img src="/images/defenses/SpikeTrap.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 defense turret item">
          <a href="/images/defenses/TaserTurret.jpg" data-fancybox="gallery">
            <img src="/images/defenses/TaserTurret.jpg" alt="Image Gallery" class="img-fluid">
          </a>
        </div>
      </div>
  </section>
  
  <?php include "modules/beta.php" ?>

  <?php include "modules/footer.php" ?>

  <?php include "modules/scripts.php" ?>
</body>
</html>