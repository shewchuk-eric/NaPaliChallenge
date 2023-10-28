<?php $pageTitle = "***** TITLE GOES HERE";
      $pageName = 'reg'; // this will be the beginning of the hero image filename => 'reg-hero-fullsize.webp'
      $alt = 'image of unlimited class race starting'; // alt text for hero image
      $hero = selectHero($pageName, $alt, 1920, 280); // numbers are default ratio for hero image (medium width=1000, small width=500)
      include_once 'views/header.php'; ?>

<section id='mainContent'>
    <h1>*** PAGE HEADLINE ***</h1>
<?php if(isset($message)) {echo $message;} ?>

    <!-- place body content here! -->


</section>
<?php include_once 'footer.php'; ?>
