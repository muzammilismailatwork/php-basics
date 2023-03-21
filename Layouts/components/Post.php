<?php
class Post{
public $src;
public $title;
public $description;


function __construct($src, $title, $description) {
    $this->src= $src;
    $this->title= $title;
    $this->description= $description;
}    
function render(){

    include_once(__DIR__.'/Image.php');
    ?>
    <div class="d-flex align-items-center">
        <?php
        $hero_image = new Image('./Assets/SideBar.jpg', 'Post Image','rounded-circle px-2', '150px');
        $hero_image->render();
        ?>
        <!-- <img src="" style="width: 150px;" class="" alt="sidebar error"> -->
        <div>
            <h5><?php echo $this->title?></h5>
            <p><?php echo $this->description?></p>
        </div>
    </div>
<?php

}
}


?>