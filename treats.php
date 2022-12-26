<?php

trait CofeeTrait{
    public function make_cofee(){
        echo "Making Cofee.";
    }
}

trait TeaTrait{
    public function make_tea(){
        echo "Making Tea";
    }
}

class Cofee{
    use CofeeTrait;
}

class Tea{
    use TeaTrait;
    use CofeeTrait;
}