<?php
trait Title {

    private $title;

    public function setTitle($_title){
        $this->title = $_title;
      }

      public function getTitle(){
        return $this->title;
      }  

}

?>