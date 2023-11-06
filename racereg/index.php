<?php // This is the main views controller

require_once 'library/connections-local.php'; // bring in DB connections ability
require_once 'library/functions.php'; // contains data validation functions


// check for an action value
$action = filter_input(INPUT_POST, 'action'); 
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
  if ($action == NULL){
    $action = 'home';
  }
 }

 // decide which view to show
 switch ($action){
    case 'home': // first time to vehicle management section - shows options
        include 'views/home.php';
        break;
    case 'race': // user selected (nav) 'Race Info'
        include 'views/race-info.php';
        break;
    case 'info': // user selected (nav) 'Registration Info'
        include 'views/register-info.php';
        break;
    case 'docs': // user selected (nav) 'Waivers & Documents'
        include 'views/documents.php';
        break;
    case 'gallery': // user selected (nav) 'Gallery'
        include 'views/gallery.php';
        break;    
    case 'contact': // user selected (nav) 'Contact'
        include 'views/contact-form.php';
        break;

    case 'contactUs': // user has submitted C0NTACT form
        $fname = trim(filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS)); // get form values and make sure they're clean
        $lname = trim(filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        $sentmssg = trim(filter_input(INPUT_POST, 'sentmssg', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

        // $email = checkEmail($email); // validate email structure

        if(empty($fname) || empty($lname) || empty($email) || empty($sentmssg)) { // check for any empty lines in form
            $message = "<p>Please provide information for all empty form fields.</p>";
            include 'views/contact-form.php'; // empty field is found - show error message
            exit;
        }

        $mssgSent = sendEmail($fname, $lname, $email, $sentmssg); // all fields populated - send to email delivery function in 'library/functions.php'
        if ($mssgSent === 1) {
            $message = "<p>Your message has been sent to the Na Pali Challenge race secretary.</p>";
            include 'views/contact-form.php';
            exit;
        } else {
            $message = "<p>There was a problem sending your message.  Please try again later.</p>";
            include 'views/contact-form.php';
            exit;
          }
        break;

    default: // Houston, we have a problem
        echo 'Switch not working';
        break;
   }

 ?>

