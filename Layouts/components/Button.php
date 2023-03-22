<?php
class Btn{
    public $name;
    public $url;
    public $myclass;
    public $type;
    function __construct($name, $url, $myclass, $type='button'){
        $this->name = $name;
        $this->url = $url;
        $this->myclass = $myclass;
        $this->type = $type;
    }
    function get_html(){
        echo '<button type="'.$this->type.'" class="'.$this->myclass.'" href="'.$this->url.'">'.$this->name.'</button>';
    }
}
?>