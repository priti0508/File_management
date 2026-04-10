<?php


interface Course {
    public function enroll($studentName);
    public function drop($studentName);
    public function completeCourse($studentName);
}


class OnlineCourse implements Course {

    public function enroll($studentName) {
        echo $studentName . " enrolled in Online Course.\n";
    }

    public function drop($studentName) {
        echo $studentName . " dropped the Online Course.\n";
    }

    public function completeCourse($studentName) {
        echo $studentName . " completed the Online Course.\n";
    }
}


class InpersonCourse implements Course {

    public function enroll($studentName) {
        echo $studentName . " enrolled in In-person Course.\n";
    }

    public function drop($studentName) {
        echo $studentName . " dropped the In-person Course.\n";
    }

    public function completeCourse($studentName) {
        echo $studentName . " completed the In-person Course.\n";
    }
}


$online = new OnlineCourse();
$inperson = new InpersonCourse();

$online->enroll("Rahul");
$online->completeCourse("Rahul");

$inperson->enroll("Anita");
$inperson->drop("Anita");

?>