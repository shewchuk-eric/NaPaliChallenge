<?php $pageTitle = "Get All The Documents You'll Need For Participation || Documents";
      $pageName = 'docs';
      $description = "This view has a list of documents and links that are needed for participation in the Na Pali Challenge.";
      $alt = 'image of unlimited class canoes racing outside Hanalei';
      $hero = selectHero($pageName, $alt, 1920, 280);
      include_once 'views/header.php'; ?>

<section id='mainContent'>
    <h1>Review/Download All Race Documents</h1>
<?php if(isset($message)) {echo $message;} ?>

    <h3>HCRA Waiver</h3>
    <p>Required if you aren't already an HCRA registered member.<br>
        <a href="https://www.koapaddler.org/wp-content/uploads/2022/12/2023-HCRA-waiver-FILLABLE.pdf" target="_blank">Fillable Waiver</a>
    </p>

    <h3>Shipping Form</h3>
    <p>Shows how to complete the shipping form to send your canoe to Kauai.<br>
        <img src="images/shipping-form.png" width="600" height="358" alt="image of bill of lading">
        </p>


</section>
<?php include_once 'footer.php'; ?>  <!-- 'footer.php' has the closing </body> element -->