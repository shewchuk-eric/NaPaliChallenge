<?php $pageTitle = "Get All The Documents You'll Need For Participation || Documents";
      $pageName = 'docs';
      $alt = 'image of unlimited class canoes racing outside Hanalei';
      $hero = selectHero($pageName, $alt, 1920, 280);
      include_once 'views/header.php'; ?>

<section id='mainContent'>
    <h1>Review/Download All Race Documents</h1>
<?php if(isset($message)) {echo $message;} ?>

    <!-- place body content here! -->


</section>
<?php include_once 'footer.php'; ?>  <!-- 'footer.php' has the closing </body> element -->