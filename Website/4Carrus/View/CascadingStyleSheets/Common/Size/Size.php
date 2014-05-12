<?php
   header("Content-type: text/css; charset: UTF-8");
   header('Cache-control: must-revalidate');
   include 'Configurations/Balloon.php';
?>

body{
   padding: <?php echo $bodyPadding;?>px;
   margin: <?php echo $bodyMargin;?>px;
   width: <?php echo $bodyMinWidthPercentage;?>%;
   color: <?php echo $baseColor;?>;
}