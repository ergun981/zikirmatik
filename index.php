<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <title>ZiKiRMATiK</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" type="text/css" href="css/main.min.css" />
</head>
<body>
    
    <div class="SiteContainer">
        <?php include "section/SiteHeader.php"; ?>
        <?php include "section/SiteContent.php"; ?>
        <?php include "section/SiteTab.php"; ?>
        <?php include "section/SiteNavigation.php"; ?>
        <?php include "section/ItemAddForm.php"; ?>
    </div><!-- SiteContainer -->


<?php include "template/tmp_ZikirList.php"; ?>

<!--script type="text/javascript" src="phonegap.js"></script-->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/plugin.min.js"></script>
<script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>