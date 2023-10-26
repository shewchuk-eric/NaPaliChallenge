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
        include 'views/register-info.php';
        break;
    case 'gallery': // user selected (nav) 'Gallery'
        include 'views/gallery.php';
        break;    
    case 'contact': // user selected (nav) 'Contact'
        include 'views/contact-form.php';
        break;

    case 'contactUs': // user has submitted C0NTACT form
        // $invMake = trim(filter_input(INPUT_POST, 'invMake', FILTER_SANITIZE_FULL_SPECIAL_CHARS)); // get form values and make sure they're clean
        // $invModel = trim(filter_input(INPUT_POST, 'invModel', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        // $invDescription = trim(filter_input(INPUT_POST, 'invDescription', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        // $invImage = trim(filter_input(INPUT_POST, 'invImage', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        // $invThumbnail = trim(filter_input(INPUT_POST, 'invThumbnail', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        // $invPrice = trim(filter_input(INPUT_POST, 'invPrice', FILTER_SANITIZE_NUMBER_FLOAT));
        // $invStock = trim(filter_input(INPUT_POST, 'invStock', FILTER_SANITIZE_NUMBER_INT));
        // $invColor = trim(filter_input(INPUT_POST, 'invColor', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        // $classificationId = trim(filter_input(INPUT_POST, 'classes', FILTER_SANITIZE_NUMBER_INT));

        // $invImage = cleanFileName($invImage);
        // $invThumbnail = cleanFileName($invThumbnail);

        // if(empty($invMake) || empty($invModel) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invColor) || empty($classificationId)) { // check for any empty lines in form
        //     $message = "<p>Please provide information for all empty form fields.</p>";
        //     include '../views/vehicles-add-new.php'; // empty field is found - show error message
        //     exit;
        // }
        // $regOutcome = addNewVehicle($invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId); // all fields populated - send to insert function in 'accounts-model.php'
        // if ($regOutcome === 1) {
        //     $message = "<p>$invMake $invModel has been added to the vehicle inventory.</p>";
        //     include '../views/vehicles-add-new.php';
        //     exit;
        // } else {
        //     $message = "<p>$invMake $invModel cannot be added at this time. Please try again.</p>";
        //     include '../views/vehicles-add-new.php';
        //     exit;
        //   }
        // break;

    default: // Houston, we have a problem
        echo 'Switch not working';
        break;
   }

 ?>

