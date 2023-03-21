<?php


class Menu{
    public $title;
    public $menu_items;


    function __construct($title,$menu_items){
        $this->title=$title;
        $this->menu_items =$menu_items;

    }
    function render(){
       ?>
<h5><?php echo $this->title ?></h5>
<ul class="nav flex-column">
    <?php
    foreach($this->menu_items as $item){
       echo '<li class="nav-item mb-2"><a href="'.$item[1].'" class="nav-link p-0 text-muted">'.$item[0].'</a></li>';
    }
    ?>
</ul>
<?php
    }
}

?>