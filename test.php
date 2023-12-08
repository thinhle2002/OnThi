<?php
$a = "abc";
echo $a;
?>

<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Sử dụng hàm để kiểm tra số nguyên tố
$testNumber = 13; // Thay đổi số cần kiểm tra ở đây
if (isPrime($testNumber)) {
    echo "$testNumber là số nguyên tố.";
} else {
    echo "$testNumber không phải là số nguyên tố.àghjklasfghaaaaa";
}
?>