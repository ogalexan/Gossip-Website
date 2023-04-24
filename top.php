<?php
$phpSelf=htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>New to Snowboarding? Here's your guide!</title>
        <meta name="author" content="Olivia Alexander">
        <meta name="description" content="This page will give you tips, tricks and 
        more to get you well on your way to becoming a more expert snowboarder.">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css">

    </head>
    <?php
    print '<body class="' . $pathParts['filename'] . '">';
    print '<!-- #################    Body element   ###############  -->';

    include 'Connect-DB.php';
    include 'header.php';
    include 'nav.php';
    ?>