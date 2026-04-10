<?php
class Emp{
    public $id;
    public $name;
    public $sal;

    public function __construct($id,$name,$sal) {
        $this->id = $id;
        $this->name = $name;
        $this->sal = $sal;
    }
     function showDetail(){
        echo $this->id;
        echo $this->name;
        echo $this->sal;
    }
}
    $ob1=new Emp(1,"tom",12000);
    $ob1->showDetail();
?>