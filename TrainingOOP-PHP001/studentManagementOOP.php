<?php
namespace TrainingOOP1;

class Student {
    public $name;  
    public $score; 

    /**
     * Student class constructor
     * @param string $name The name of the student
     * @param float $score The score of the student
     */
    public function __construct($name, $score) { 
        $this->name = $name;   
        $this->score = $score; 
    }
}

/**
 * Class for managing students
 */
class StudentManagement {
    private $listStudents = []; // Storage array for students

    /**
     * Add a new student to the list
     * @param string $name The name of the student
     * @param float $score The score of the student
     */
    public function addStudent($name, $score) {
        $student = new Student($name, $score); // Create a new Student object
        $this->listStudents[] = $student;       // Add the student to the list
    }

    /**
     * Show the list of students
     */
    public function showList() {
        printf("List of Students:<br>"); 
        foreach ($this->listStudents as $student) {
            printf("Name: %s, Score: %.2f<br>", $student->name, $student->score); // Display each student's information
        }
    }

    /**
     * Calculate and display the average score of students.
     */
    public function Average() {
        $totalScore = 0; // Variable to hold total score
        $numberOfStudents = count($this->listStudents); // Number of students
    
        foreach ($this->listStudents as $student) {
            $totalScore += $student->score; // Add each student's score to the total
        }
    
        if ($numberOfStudents > 0) {
            $averageScore = $totalScore / $numberOfStudents; // Calculate average score
            printf("The average score of the students is: %.2f<br>", $averageScore);
        } else {
            printf("There are no students in the list.<br>");
        }
    }

    /**
     * Search for the student with the highest score
     */
    public function SearchHighestScoreStudent() {
        $highestScore = -1; // Initialize highest score lower than possible scores
        $topStudentName = ""; // Name of the top student
    
        foreach ($this->listStudents as $student) {
            if ($student->score > $highestScore) {
                $highestScore = $student->score; // Update highest score
                $topStudentName = $student->name; // Update name of the student with highest score
            }
        }
    
        printf("The student with the highest score is: %s with a score of %.2f<br>", $topStudentName, $highestScore);
    }

    /**
     * Search for the student with the lowest score
     */
    public function SearchLowestScoreStudent() {
        $lowestScore = 100; // Initialize lowest score higher than possible scores
        $bottomStudentName = ""; // Name of the student with the lowest score

        foreach ($this->listStudents as $student) {
            if ($student->score < $lowestScore) {
                $lowestScore = $student->score; // Update lowest score
                $bottomStudentName = $student->name; // Update name of the student with lowest score
            }
        }

        printf("The student with the lowest score is: %s with a score of %.2f<br>", $bottomStudentName, $lowestScore);
    }
}

// Create an instance of StudentManagement
$stManagement = new StudentManagement();

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

// Find the student with the lowest score
$stManagement->SearchLowestScoreStudent();

// Calculate average score
$stManagement->Average();
?>
