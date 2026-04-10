<?php


abstract class Student {
    protected $name;
    protected $marks;

    public function __construct($name, $marks) {
        $this->name = $name;
        $this->marks = $marks;
    }

    
    abstract public function calculateGrade();
}


class UndergraduateStudent extends Student {

    public function calculateGrade() {
        if ($this->marks >= 85) {
            return "A";
        } elseif ($this->marks >= 70) {
            return "B";
        } elseif ($this->marks >= 50) {
            return "C";
        } else {
            return "Fail";
        }
    }
}


class GraduateStudent extends Student {

    public function calculateGrade() {
        if ($this->marks >= 90) {
            return "A";
        } elseif ($this->marks >= 75) {
            return "B";
        } elseif ($this->marks >= 60) {
            return "C";
        } else {
            return "Fail";
        }
    }
}


$ug = new UndergraduateStudent("Rahul", 72);
$grad = new GraduateStudent("Anita", 88);

echo "Undergraduate Grade: " . $ug->calculateGrade() . "\n";
echo "Graduate Grade: " . $grad->calculateGrade() . "\n";

?>