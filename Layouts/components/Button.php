<?php
class Btn{
    public $name;
    public $url;
    public $myclass;

    function __construct($name, $url, $myclass){
        $this->name = $name;
        $this->url = $url;
        $this->myclass = $myclass;
    }
    function get_html(){
        echo '<button class="'.$this->myclass.'" href="'.$this->url.'">'.$this->name.'</button>';
    }
}
?>