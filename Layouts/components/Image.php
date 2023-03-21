<?php
class Image{
public $src;
public $alt;
public $myclass;
public $width;
public $height;

function __construct($src, $alt, $myclass, $width = 'auto', $height = 'auto') {
    $this->src= $src;
    $this->alt= $alt;
    $this->myclass= $myclass;
    $this->width= $width;
    $this->height= $height;
}    
function render(){
    /*
     return ?><img style="height:<?php echo $height; ?>; width:<?php echo $this->width;?>;" src="<?php echo $src ?>" class="img-fluid hero_img" alt="hero image error"><?php
*/
    echo '<img height="'.$this->height.'" width="'.$this->width.'"src="'.$this->src.'" class="'.$this->myclass.'" alt="'.$this->alt.'">';
}
}


?>