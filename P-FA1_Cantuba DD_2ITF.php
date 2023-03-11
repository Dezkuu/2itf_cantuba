<?php

class nameOfClass{
    private $name;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }


    private $year;

    public function setYear($year){
        $this->year = $year;
    }

    public function getYear(){
        return $this->year;
    }


    private $section;

    public function setSection($section){
        $this->section = $section;
    }

    public function getSection(){
        return $this->section;
    }



    public function displayInfo(){
        echo "Name: " . $this->name . "<br><br>";
        echo "Year: " . $this->year . "<br><br>";
        echo "Section: " . $this->section . "<br><br>";
    }
}


class nameOfChild extends nameOfClass{
    private $teacher;

    public function __construct($teacher){
        $this->teacher = $teacher;
    }

    public function getTeacher(){
        return $this->teacher;
    }

    public function printInfo(){
        echo "Teacher: " . $this->teacher . "<br><br>";
    }
}


class nameOfGrandChild extends nameOfChild{
    private $grandChild;

    public function __construct($grandChild){
        parent::__construct($grandChild);
        $this->grandChild = $grandChild;
    }

    public function getGrandChild(){
        return $this->grandChild;
    }
}


class nameOfChild2 extends nameOfClass{
    private $child2;

    public function __construct($child2){
        $this->child2 = $child2;
    }

    public function getChild2(){
        return $this->child2;
    }

    public function displayInfo(){
        parent::displayInfo();
        echo "Child 2: " . $this->child2 . "<br><br>";
    }
}

$student1 = new nameOfClass();
$student1->setName("Dusk");
$student1->setYear("2nd Year");
$student1->setSection("2ITF<br><br>");
$student1->displayInfo();

$student2 = new nameOfChild("Errol");
$student2->setName("Denilson");
$student2->setYear("1st Year");
$student2->setSection("1CSD");
$student2->displayInfo();
$student2->printInfo();
echo "<br><br>";

$student3 = new nameOfGrandChild("John");
$student3->setName("Dezkuu");
$student3->setYear("3rd Year");
$student3->setSection("3CSA");
$student3->displayInfo();
echo "Teacher: " . $student3->getTeacher() . "<br><br>";

?>