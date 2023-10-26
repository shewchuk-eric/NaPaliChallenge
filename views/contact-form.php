<?php $pageTitle = "The Na Pali Challenge Outrigger Canoe Race || Home";
    include_once 'views/header.php'; ?>

<h1 id='form-title'>Contact Race Officials</h1>
<section class='form-container'>

<?php
    if(isset($message)) {
        echo $message;
    }
    ?>

    <form id='officialContact' action="index.php" method="post">
        <fieldset><legend>Vehicle Classifications</legend>
        <div class="form-field input-right">
            <label for="classificationName">Name Of New Class</label>
            <span>Requires 1 to 30 characters</span>
            <input name="classificationName" id="classificationName" type="text" required pattern="(?=^.{1,30}$).*$">
        </div>
        <div class="form-field submit-field">
            <input type="submit" value="Send My Message">
            <input type="hidden" name="action" value="contactUs">
        </div>
        </fieldset>
    </form>
</section>

<?php include_once 'footer.php'; ?>