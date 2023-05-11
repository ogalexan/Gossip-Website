<?php
$phpSelf=htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome, sit down and relax, grab a cup and stay for a little</title>
        <meta name="author" content="Rachel Amster and Olivia Alexander">
        <meta name="description" content="This page will keep you so in the loop with the latest gossip there is to know.">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        
        <link rel="stylesheet" href="css/custom.css?version=<?php print time();?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 810px)" href="css/custom-tablet.css?version=<?php print time();?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-phone.css?version=<?php print time();?>" type="text/css">
    </head> 
    <?php
    print '<body class="' . $pathParts['filename'] . '">';
    print '<!--################ Body element ################ -->';
    include 'Connect-DB.php';
    include 'header.php';
    include 'nav.php';
    ?>