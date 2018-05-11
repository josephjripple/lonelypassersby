<?php
    $companyName = 'the lonely passersby';
    include('includes/arrays.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $companyName ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="styles/style.css" rel="stylesheet" type="text/css">
</head>

<body class="body-container">

    <div class="wrapper">

    <div class="banner">
        <a href="/" title="Return to Home">
          <img class="header-img" src="images/restaurant.png" alt="the lonely passersby restaurant">
    </div><!-- banner -->

    <div class="nav">
        <?php include('includes/nav.php'); ?>
    </div> <!-- nav -->

    <div class="content">
