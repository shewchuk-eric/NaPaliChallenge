<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Eric Shewchuk">
    <meta name="description" content="<?php echo $description; ?>">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <meta property="og:title" content="The World's Most Beautiful Outrigger Race">
    <meta property="og:type" content="article">
    <meta property="og:description" content="The Na Pali Challenge spans 37 miles of breathtaking scenery between Hanalei and Kekaha.">
    <meta property="og:image" content="images/NaPali_640.webp">
    <meta property="og:url" content="https://<!-- get URL for 'Home' page and put it here -->">
    <meta property="og:site_name" content="The Na Pali Challenge Outrigger Race">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image:alt" content="image of outrigger canoes racing in The Na Pali Challenge">
</head>
<body>
<header>
<?php include_once 'views/navigation.php'; ?>

</header>
    <body>
    <?php echo $hero; ?> <!-- uses 'selectHero' function to get different hero photo for each page -->