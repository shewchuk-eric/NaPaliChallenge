<?php $pageTitle = "Details About Race Schedule And Logistics || Race Information";
      $pageName = 'info';
      $alt = 'image of canoes and competitors before race';
      $hero = selectHero($pageName, $alt, 1920, 280);
      include_once 'views/header.php'; ?>

<section id='mainContent'>
    <h1>Everything You Need To Know</h1>
<?php if(isset($message)) {echo $message;} ?>

    <!-- place body content here! -->


<section id='mainContent'>
<?php include_once 'footer.php'; ?>  <!-- 'footer.php' has the closing </body> element -->