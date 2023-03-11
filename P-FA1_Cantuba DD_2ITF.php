<?php

class nameOfClass{
    private $student

    public function setStudent($student){
        $this->student = $student;
    }

    public function getStudent{
        return $this->student;
    }

    
    private $section

    public function setSection($section){
        $this->section = $section;
    }

    public function getSection{
        return $this->section;
    }


    private $teacher

    public function setTeacher($teacher){
        $this->teacher = $teacher;
    }

    public function getTeacher{
        return $this->teacher;
    }



    public function displayInfo($student, $section, $teacher){
        echo "Student: " . $this->student . "<br><br>";
        echo "Section: " . $this->section . "<br><br>";
        echo "Teacher: " . $this->teacher . "<br><br>";
    }
}

?>