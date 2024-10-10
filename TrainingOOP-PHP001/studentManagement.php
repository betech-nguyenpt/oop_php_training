<?php
namespace TrainingOOP-PHP000PHP0001;
//Array to store student list
$listStudent = array();

// function : addStudent
function addStudent($name, $point) {
    global $listStudent;
    $Student = array("name" => $name, "point" => $point);
    $listStudent[] = $Student;
}

// function :showList
function showList() {
    global $listStudent;
    echo "List Student:<br>";
    foreach ($listStudent as $Student) {
        echo "Name: " . $Student['name'] . ", Point: " . $Student['point'] . "<br>";
    }
}

// function Average
function Average() {
    global $listStudent;
    $Sum = 0;
    $slStudent = count($listStudent);

    foreach ($listStudent as $Student) {
        $Sum += $Student['point'];
    }

    if ($slStudent > 0) {
        $averageScore = $Sum / $slStudent;
        echo "The average score of the students is: $averageScore<br>";
    } else {
        echo "There are no students on the list.<br>";
    }
}

// function searchHighestScoreStudent
function searchHighestScoreStudent() {
    global $listStudent;
    $highestScore = -1;
    $topStudentName = "";

    foreach ($listStudent as $Student) {
        if ($Student['point'] > $highestScore) {
            $highestScore = $Student['point'];
            $topStudentName = $Student['name'];
        }
    }

    echo "The student with the highest score is: $topStudentName with a score of $highestScore<br>";
}

// function SearchLowestScoreStudent
function SearchLowestScoreStudent() {
    global $listStudent;
    $lowestScore = 100;
    $bottomStudentName= "";

    foreach ($listStudent as $Student) {
        if ($Student['point'] < $bottomStudentName) {
            $lowestScore = $Student['point'];
            $bottomStudentName = $Student['name'];
        }
    }

    echo "The student with the lowest score is: $bottomStudentName with a score of $lowestScore<br>";
}

// Add some students to test("NguyenVanA", 9);
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
