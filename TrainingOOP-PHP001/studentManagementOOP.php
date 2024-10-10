<?php
namespace TrainingOOP1;
// 
class Student {
    public $name; // 
    public $score; //

    // Student class constructor
    public function  __construct($name, $score) { 
        $this->name = $name;   
        $this->score = $score; 
    }
}

// Class studentManagement
class studentManagement {
    private $listStudent = array(); // storage array

    // Add new students to the list
    public function addStudent($name, $score) {
        $student = new Student($name, $score); // 
        $this->listStudent[] = $student;       // Add objects to the list
    }

    // 
    public function showList() {
        echo "List Student:<br>"; 
        foreach ($this->listStudent as $student) {
            echo "name: " . $student->name . ", score: " . $student->score . "<br>"; // Display information for each student
        }
    }

    // Calculate the average score of all students
    public function Average () {
        $totalScore = 0; // Variable to hold total score
        $numberOfStudents = count($this->listStudent); // Number of students
    
        foreach ($this->listStudent as $student) {
            $totalScore += $student->score; // Add each student's score to the total score
        }
    
        if ($numberOfStudents > 0) {
            $averageScore = $totalScore / $numberOfStudents; // Calculate average score
            echo "The average score of the students is: $averageScore<br>";
        } else {
            echo "There are no students in the list.<br>";
        }
    }

    // Find the student with the highest score
    public function SearchHighestScoreStudent() {
        $highestScore = -1; // Initialize the highest score lower than the possible score
        $topStudentName = ""; // 
    
        foreach ($this->listStudent as $student) {
            if ($student->score > $highestScore) {
                $highestScore = $student->score; // Update highest score
                $topStudentName = $student->name; // Update the name of the student with the highest score
            }
        }
    
        echo "The student with the highest score is: $topStudentName with a score of $highestScore<br>";
    }

   // Find the student with the lowest score
public function SearchLowestScoreStudent() {
    $lowestScore = 100; // Initialize the lowest score higher than the possible score
    $bottomStudentName = ""; // Initialize the name of the student with the lowest score

    foreach ($this->listStudent as $student) {
        if ($student->score < $lowestScore) {
            $lowestScore = $student->score; // Update lowest score
            $bottomStudentName = $student->name; // Update the name of the student with the lowest score
        }
    }

    echo "The student with the lowest score is: $bottomStudentName with a score of $lowestScore<br>";
    }
}

// 
$stManagement = new studentManagement();

// Add some students to test
$stManagement->addStudent("NguyenVanA", 9);
$stManagement->addStudent("NguyenVanB", 7.5);
$stManagement->addStudent("NguyenVanC", 6);
$stManagement->addStudent("NguyenVanD", 8.5);
$stManagement->addStudent("LeVanA", 9.5);
$stManagement->addStudent("LeVanB", 8);
$stManagement->addStudent("LeVanC", 6.5);
$stManagement->addStudent("LeVanD", 9);

// Display list of students
$stManagement->showList();

// Find the student with the highest score
$stManagement->SearchHighestScoreStudent();

//  Find the student with the lowest score
$stManagement->SearchLowestScoreStudent();

//Calculate average score
$stManagement->Average();
?>