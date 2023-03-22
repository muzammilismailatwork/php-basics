<?php
class Social{
    public $url;
    public $src;

    function __construct($url, $src){
        $this->url = $url;
        $this->src = $src;
    }
    function render(){
        echo '<li class="ms-3"><a class="link-dark" href="'.$this->url.'"><img src="'.$this->src.'" class="icon"></a></li>';
    }
}
?>