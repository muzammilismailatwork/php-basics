<?php
class MyInput{
    public $label;
    public $type;
    public $myclass;
    public $id;
    public $placeholder;

    function __construct($label, $type, $myclass, $id, $placeholder){
        $this->label = $label;
        $this->type = $type;
        $this->myclass = $myclass;
        $this->id = $id;
        $this->placeholder = $placeholder;
    }
    function render(){
    
        if($this->type == 'checkbox'){
            ?>
<input type="<?php echo $this->type ?>" class="<?php echo $this->myclass ?>" id="<?php echo $this->id ?>">
<label for="<?php echo $this->id ?>" class="form-label"><?php echo $this->label ?></label>
<?php
        }
        else{
        ?>
<label for="exampleInputEmail1" class="form-label"><?php echo $this->label ?></label>
<input type="<?php echo $this->type ?>" class="<?php echo $this->myclass ?>" id="<?php echo $this->id ?>">
<?php
       if($this->type == "email"){
        echo '<div id="emailHelp" class="form-text">We \'ll never share your email with anyone else.</div>';
       }
    }
    }

}
?>