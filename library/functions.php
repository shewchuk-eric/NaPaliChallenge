<?php

function validateContactForm() {
    
}

function sendEmail($fname, $lname, $email, $sentmssg) {

}

function selectHero($page, $alt, $width, $height) {
    $hero = "<picture>";
    $hero .= "<source srcset='images/$page-hero-small.webp' media='(max-width: 500px)'>";
    $hero .= "<source srcset='images/$page-hero-medium.webp' media='(max-width: 1000px)'>";
    $hero .= "<img src='images/$page-hero-fullsize.webp' alt='$alt' width='1920' height='513' class='hero'>";
    $hero .= "</picture>";
    return $hero;
}

?>