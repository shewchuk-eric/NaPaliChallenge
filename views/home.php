<?php $pageTitle = "The Na Pali Challenge Outrigger Canoe Race || Home";
      $pageName = 'home';
      $alt = 'image of unlimited class race starting';
      $hero = selectHero($pageName, $alt, 1920, 513);
      include_once 'views/header.php'; ?>

<section id='mainContent'>
      <h1>The World's Most Beautiful Outrigger Canoe Race!</h1>
<?php if(isset($message)) {echo $message;} ?>

<h2>The Kaua’i Outrigger Association is proud to host the annual Na Pali Challenge.</h2>

<p id='homer'>The Na Pali Challenge is a world-class outrigger canoe race that brings top paddling athletes to Kauai from far-flung locations.  It is an opportunity for wahine and kane to come together and race 37 miles down the stunning Na Pali Coast. Each team consists of 6 wahine and 6 kane. The two teams take alternating turns in the canoe, making water changes every 30 minutes.</p>

<section id="lightbox">
      <img src="images/NaPali_610.webp" height="366" width="550">
      <img src="images/NaPali_640.webp" height="366" width="550">
      <img src="images/NaPali_666.webp" height="366" width="550">
</section>
</section>
<?php include_once 'footer.php'; ?>