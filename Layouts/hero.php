<?php
include_once(__DIR__.'/components/Image.php');
$hero_image = new Image('./Assets/hero.jpg', 'Hero Image','img-fluid hero_img');
$hero_image->render();
?>
<!-- <img src="./Assets/hero.jpg" class="img-fluid hero_img" alt="hero image error"> -->