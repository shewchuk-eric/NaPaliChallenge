<?php

// USE BUILT-IN FUNCTION TO TEST FOR VALID EMAIL STRUCTURE
function checkEmail($email) {
    $valEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    return $valEmail;
}

// SEND THE USER MESSAGE FROM CONTACT FORM VIA EMAIL
function sendEmail($fname, $lname, $email, $sentmssg) {
    $address = 'temeculastoneworks@msn.com';
    $subj = "Message from $fname $lname";
    $text = "$email\n$sentmssg";
    mail($address,$subj,$text);
}

function selectHero($page, $alt) {
    $hero = "<picture>";
    $hero .= "<source srcset='images/$page-hero-small.webp' media='(max-width: 500px)'>";
    $hero .= "<source srcset='images/$page-hero-medium.webp' media='(max-width: 1000px)'>";
    $hero .= "<img src='images/$page-hero-fullsize.webp' alt='$alt' width='1920' height='513' class='hero'>";
    $hero .= "</picture>";
    return $hero;
}

?>