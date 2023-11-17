<?php $pageTitle = "The Na Pali Challenge Outrigger Canoe Race || Home";
      $pageName = 'home';
      $description = "The Na Pali Challenge is a world-class outrigger canoe race that spans 37 miles of breathtakingly beautiful coastline.";
      $alt = 'Unlimited class race starting';
      $hero = selectHero($pageName, $alt);
      include_once 'views/header.php'; ?>

<section id='mainContent'>
      <h1>The World's Most Beautiful Outrigger Canoe Race!</h1>
<?php if(isset($message)) {echo $message;} ?>

<h2>The Kaua’i Outrigger Association is proud to host the annual Na Pali Challenge.</h2>

<section id='homePage'>
      <p>The Na Pali Challenge is a world-class outrigger canoe race that brings top paddling athletes to Kauai from far-flung locations.  It is an opportunity for wahine and kane to come together and race 37 miles down the stunning Na Pali Coast. Each team consists of 6 wahine and 6 kane. The two teams take alternating turns in the canoe, making water changes every 30 minutes.</p>
      <img src="images/NaPali_640.webp" height="366" width="550" alt="canoe race on open ocean" class="lightbox">
</section> <!-- end 'homePage' --> 
<section id='homeIcons'>
      <a href='https://www.koapaddler.org/' target="_blank"><img src="images/icons/koa-icon.svg" height="200" width="200" alt="Kauai Outrigger Association Icon"></a>
      <a href='index.php?action=info'><img src="images/icons/register-icon.svg" height="200" width="200" alt="Call to action Icon"></a>
      <a href='index.php?action=race'><img src="images/icons/info-icon.svg" height="200" width="200" alt="Learn More Icon"></a>
</section>
<section id='homeImages'>     
      <img src="images/NaPali_610.webp" height="366" width="550" alt="outrigger canoe being paddled" class="lightbox">
      <img src="images/NaPali_666.webp" height="366" width="550" alt="canoe in foreground with two others in background" class="lightbox">
</section> <!-- end 'homeImages' -->
</section> <!-- end 'mainContent' -->
<?php include_once 'footer.php'; ?>