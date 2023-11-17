<?php 
    $pageTitle = "Contact Support At The Na Pali Challenge || Contact Us";
    $pageName = 'contact';
    $description = "Use the form on this view to get in touch with the Na Pali Challenge official race secretary.";
    $alt = 'Unlimited class race starting';
    $hero = selectHero($pageName, $alt);
    include_once 'views/header.php';
?>

<section id='mainContent' ng-controller="Contact">
    <h1>Contact Race Officials</h1>
    <form id='officialContact' name="contact" ng-submit="submitContact()" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>How Can We Help?</legend>
            <div class="note">* Please note that all fields are required</div>
            <label>
                <span>First Name</span>
                <input type="text" name="fname" ng-model="inputs.fname" required>
            </label>
            <label>
                <span>Last Name</span>
                <input type="text" name="lname" ng-model="inputs.lname" required>
            </label>
            <label>
                <span>Email</span>
                <input type="email" name="email" ng-model="inputs.email" required>
            </label>
            <label style="position: absolute; top: -10000px; left: -10000px;">
                <span>Website</span>
                <input type="text" name="website" ng-model="inputs.website">
            </label>
            <label>
                <span>Phone</span>
                <input type="tel" name="phone" ng-model="inputs.phone" required>
            </label>
            <label>
                <span>Your Message</span>
                <textarea name="message" ng-model="inputs.message" required placeholder="How Can We Help?"></textarea>
            </label>
            <input type="submit" value="Send My Message">
            <div id="usr_msg">
                An error has occurred, please try again later.
                <div id="close"><div>
            </div>
        </fieldset>
        <div id="spinner">
            <div></div>
        </div>
    </form>

    <script src='scripts/spinner.js'></script>
</section>

<?php include_once 'footer.php'; ?>