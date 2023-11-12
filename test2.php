<?php
function isEven($number) {
    return $number % 2 == 0;
}

// Sử dụng hàm để kiểm tra số chẵn
$testNumber = 8; // Thay đổi số cần kiểm tra ở đây
if (isEven($testNumber)) {
    echo "$testNumber là số chẵn.";
} else {
    echo "$testNumber không phải là số chẵn.";
}
?>