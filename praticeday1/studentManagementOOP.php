<?php
namespace Praticeday1;
// 
class SinhVien {
    public $ten; // 
    public $diem; //

    // SinhVien class constructor
    public function  __construct($ten, $diem) { 
        $this->ten = $ten;   
        $this->diem = $diem; 
    }
}

// Class QuanLySinhVien
class QuanLySinhVien {
    private $dsSinhVien = array(); // storage array

    // Add new students to the list
    public function themSinhVien($ten, $diem) {
        $sinhVien = new SinhVien($ten, $diem); // 
        $this->dsSinhVien[] = $sinhVien;       // Add objects to the list
    }

    // 
    public function hienThiDanhSach() {
        echo "Danh sách sinh viên:<br>"; 
        foreach ($this->dsSinhVien as $sinhVien) {
            echo "Tên: " . $sinhVien->ten . ", Điểm: " . $sinhVien->diem . "<br>"; // Display information for each student
        }
    }

    // Calculate the average score of all students
    public function tinhDiemTrungBinh() {
        $tongDiem = 0; // Biến lưu tổng điểm
        $soLuongSinhVien = count($this->dsSinhVien); // Number of students

        foreach ($this->dsSinhVien as $sinhVien) {
            $tongDiem += $sinhVien->diem; // Add each student's score to the total score
        }

        if ($soLuongSinhVien > 0) {
            $diemTrungBinh = $tongDiem / $soLuongSinhVien; //Calculate average score
            echo "Điểm trung bình của các sinh viên là: $diemTrungBinh<br>"; 
        } else {
            echo "Không có sinh viên nào trong danh sách.<br>"; 
        }
    }

    // Find the student with the highest score
    public function timSinhVienDiemCaoNhat() {
        $diemCaoNhat = -1; // Initialize the highest score lower than the possible score
        $tenSVDiemCaoNhat = ""; //

        foreach ($this->dsSinhVien as $sinhVien) {
            if ($sinhVien->diem > $diemCaoNhat) {
                $diemCaoNhat = $sinhVien->diem; // Update highest score
                $tenSVDiemCaoNhat = $sinhVien->ten; // Update the name of the student with the highest score
            }
        }

        echo "Sinh viên có điểm cao nhất là: $tenSVDiemCaoNhat với điểm $diemCaoNhat<br>";
    }

    // Find the student with the lowest score
    public function timSinhVienDiemThapNhat() {
        $diemThapNhat = 100; // Initialize the lowest point larger than the possible point
        $tenSVDiemThapNhat = ""; // Initialize the name of the student with the lowest score

        foreach ($this->dsSinhVien as $sinhVien) {
            if ($sinhVien->diem < $diemThapNhat) {
                $diemThapNhat = $sinhVien->diem; // Update lowest score
                $tenSVDiemThapNhat = $sinhVien->ten; // Update the name of the student with the lowest score
            }
        }

        echo "Sinh viên có điểm thấp nhất là: $tenSVDiemThapNhat với điểm $diemThapNhat<br>"; 
    }
}

// 
$quanLySinhVien = new QuanLySinhVien();

// Add some students to test
$quanLySinhVien->themSinhVien("Nguyễn Văn A", 9);
$quanLySinhVien->themSinhVien("Nguyễn Văn B", 7.5);
$quanLySinhVien->themSinhVien("Nguyễn Văn C", 6);
$quanLySinhVien->themSinhVien("Nguyễn Văn D", 8.5);
$quanLySinhVien->themSinhVien("Lê Văn A", 9.5);
$quanLySinhVien->themSinhVien("Lê Văn B", 8);
$quanLySinhVien->themSinhVien("Lê Văn C", 6.5);
$quanLySinhVien->themSinhVien("Lê Văn D", 9);

// Display list of students
$quanLySinhVien->hienThiDanhSach();

// Find the student with the highest score
$quanLySinhVien->timSinhVienDiemCaoNhat();

//  Find the student with the lowest score
$quanLySinhVien->timSinhVienDiemThapNhat();

//Calculate average score
$quanLySinhVien->tinhDiemTrungBinh();
?>
