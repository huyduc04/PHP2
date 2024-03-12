<?php 
    abstract class Model{
        public $name;
        public function getData(){
            echo "getData";

        }
        //Phương thức trừu tượng 
        abstract public function add();
        abstract public function delete();
        abstract public function show();
        abstract public function update();
    }

?>