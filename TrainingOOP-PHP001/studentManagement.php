<?php
namespace TrainingOOP_PHP000PHP0001;

// Array to store student list
$listStudents = [];

/**
 * Add a student to the list
 * @param string $name Student's name
 * @param float $point Student's score
 */
function addStudent($name, $point) {
    global $listStudents;
    $student = ["name" => $name, "point" => $point];
    $listStudents[] = $student;
}

/**
 * Show the list of students
 */
function showList() {
    global $listStudents;
    printf("List of Students:<br>");
    foreach ($listStudents as $student) {
        printf("Name: %s, Point: %.2f<br>", $student['name'], $student['point']);
    }
}

/**
 * Calculate and display the average score of students
 */
function Average() {
    global $listStudents;
    $sum = 0;
    $countStudents = count($listStudents);

    foreach ($listStudents as $student) {
        $sum += $student['point'];
    }

    if ($countStudents > 0) {
        $averageScore = $sum / $countStudents;
        printf("The average score of the students is: %.2f<br>", $averageScore);
    } else {
        printf("There are no students on the list.<br>");
    }
}

/**
 * Find and display the student with the highest score
 */
function searchHighestScoreStudent() {
    global $listStudents;
    $highestScore = -1;
    $topStudentName = "";

    foreach ($listStudents as $student) {
        if ($student['point'] > $highestScore) {
            $highestScore = $student['point'];
            $topStudentName = $student['name'];
        }
    }

    printf("The student with the highest score is: %s with a score of %.2f<br>", $topStudentName, $highestScore);
}

/**
 * Find and display the student with the lowest score
 */
function SearchLowestScoreStudent() {
    global $listStudents;
    $lowestScore = 100;
    $bottomStudentName = "";

    foreach ($listStudents as $student) {
        if ($student['point'] < $lowestScore) {
            $lowestScore = $student['point'];
            $bottomStudentName = $student['name'];
        }
    }

    printf("The student with the lowest score is: %s with a score of %.2f<br>", $bottomStudentName, $lowestScore);
}

// Add some students to test
addStudent("NguyenVanA", 9);
addStudent("NguyenVanB", 7.5);
addStudent("NguyenVanC", 6);
addStudent("NguyenVanD", 8.5);
addStudent("LeVanA", 9.5);
addStudent("LeVanB", 8);
addStudent("LeVanC", 6.5);
addStudent("LeVanD", 9);

// Display list of students
showList();

// Find the student with the highest score
searchHighestScoreStudent();

// Find the student with the lowest score
SearchLowestScoreStudent();

// Calculate average score
Average();
?>
