<?php $pageTitle = "Image Gallery of The Na Pali Challenge || Gallery";
      $pageName = 'gal';
      $alt = 'image of unlimited class race starting';
      $hero = selectHero($pageName, $alt, 1920, 280);
      include_once 'views/header.php'; ?>

<section id='mainContent'>
    <h1>Feel The Excitement!</h1>
<?php if(isset($message)) {echo $message;} ?>

    <!-- place body content here! -->
</section>
<?php include_once 'footer.php'; ?>