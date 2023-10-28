<?php $pageTitle = "Contact Support At The Na Pali Challenge || Contact Us";
      $pageName = 'contact';
      $alt = 'image of unlimited class race starting';
      $hero = selectHero($pageName, $alt, 1920, 280);
      include_once 'views/header.php'; ?>

<section id='mainContent'>
    <h1>Contact Race Officials</h1>
<?php if(isset($message)) {echo $message;} ?>

    <form id='officialContact' action="index.php" method="post">
        <fieldset><legend>How Can We Help?</legend>
        <div class="note">* Please note that all fields are required</div>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" <?php if (isset($fname)) { echo "value='$fname'";} ?> required>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" <?php if (isset($lname)) { echo "value='$lname'";} ?> required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" <?php if (isset($email)) { echo "value='$email'";} ?> required>
            <label for="sentmssg">Your Message</label>
            <textarea id="sentmssg" name="sentmssg" required placeholder="How Can We Help?"><?php if (isset($sentmssg)) {echo $sentmssg;} ?></textarea>
            <input type="submit" value="Send My Message">
            <input type="hidden" name="action" value="contactUs">
        </fieldset>
    </form>
</section>

<?php include_once 'footer.php'; ?>