<?php
include_once('input.php');
class MyForm{
    public $heading;
    public $feilds;
    public $btn;

    function __construct($heading, $feilds, $btn){
        $this->heading = $heading;
        $this->feilds = $feilds;
        $this->btn = $btn;
    }
    function render(){
        ?>
        <div class="form_heading">
            <h5><?php echo $this->heading ?></h5>
        </div>
        <form class="form align-items-center">
        <?php

                
        foreach($this->feilds as $field){
        ?>
        <div class="mb-3">
        <?php               
        $myinput = new MyInput($field[0], $field[1], $field[2], $field[3], $field[4]);
        $myinput->render();
        ?>
        </div>
        <?php
    }
    include_once('Button.php');
    $btn = new Btn($this->btn[0], $this->btn[1], $this->btn[2], $this->btn[3]);
    $btn->get_html();

    ?>
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</form>

<?php

    }
}
?>