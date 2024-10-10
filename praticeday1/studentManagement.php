<?php
namespace Praticeday1;
//Array to store student list
$dsSinhVien = array();

// function : themSV
function themSV($ten, $diem) {
    global $dsSinhVien;
    $SinhVien = array("ten" => $ten, "diem" => $diem);
    $dsSinhVien[] = $SinhVien;
}

// function :hien_thi_danh_sach
function hien_thi_danh_sach() {
    global $dsSinhVien;
    echo "Danh sách sinh viên:<br>";
    foreach ($dsSinhVien as $SinhVien) {
        echo "Tên: " . $SinhVien['ten'] . ", Điểm: " . $SinhVien['diem'] . "<br>";
    }
}

// function tinhTB
function tinhTB() {
    global $dsSinhVien;
    $tongDiem = 0;
    $slSinhVien = count($dsSinhVien);
    
    foreach ($dsSinhVien as $SinhVien) {
        $tongDiem += $SinhVien['diem'];
    }
    
    if ($slSinhVien > 0) {
        $diem_trung_binh = $tongDiem / $slSinhVien;
        echo "Điểm trung bình của các sinh viên là: $diem_trung_binh<br>";
    } else {
        echo "Không có sinh viên nào trong danh sách.<br>";
    }
}

// function timSVDiemCaoNhat
function timSVDiemCaoNhat() {
    global $dsSinhVien;
    $diemCaoNhat = -1;
    $tenSVDiemCaoNhat = "";
    
    foreach ($dsSinhVien as $SinhVien) {
        if ($SinhVien['diem'] > $diemCaoNhat) {
            $diemCaoNhat = $SinhVien['diem'];
            $tenSVDiemCaoNhat = $SinhVien['ten'];
        }
    }
    
    echo "Sinh viên có điểm cao nhất là: $tenSVDiemCaoNhat với điểm $diemCaoNhat<br>";
}

// function timSVDiemThapNhat
function timSVDiemThapNhat() {
    global $dsSinhVien;
    $diemThapNhat = 100;
    $tenSVDiemThapNhat = "";
    
    foreach ($dsSinhVien as $SinhVien) {
        if ($SinhVien['diem'] < $diemThapNhat) {
            $diemThapNhat = $SinhVien['diem'];
            $tenSVDiemThapNhat = $SinhVien['ten'];
        }
    }
    
    echo "Sinh viên có điểm thấp nhất là: $tenSVDiemThapNhat với điểm $diemThapNhat<br>";
}

// Add some students to test
themSV("Nguyễn Văn A", 9);
themSV("Nguyễn Văn B", 7.5);
themSV("Nguyễn Văn C", 6);
themSV("Nguyễn Văn D", 8.5);
themSV("Lê Văn A", 9.5);
themSV("Lê Văn B", 8);
themSV("Lê Văn C", 6.5);
themSV("Lê Văn D", 9);

// Display list of students
hien_thi_danh_sach();

// Find the student with the highest score
timSVDiemCaoNhat();

// Find the student with the lowest score
timSVDiemThapNhat();

// Calculate average score
tinhTB();
?>
