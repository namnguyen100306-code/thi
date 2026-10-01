<?php

// Hàm kiểm tra số nguyên tố
function isPrime($n)
{
    // Số nhỏ hơn 2 không phải số nguyên tố
    if ($n < 2) {
        return false;
    }

    // Kiểm tra từ 2 đến căn bậc hai của n
    for ($i = 2; $i <= sqrt($n); $i++) {

        // Nếu n chia hết cho i
        if ($n % $i == 0) {
            return false;
        }
    }

    // Không chia hết cho số nào
    return true;
}


// ================================
// PHẦN 1: KIỂM TRA MỘT SỐ
// ================================

if (isset($_GET['number'])) {

    $number = $_GET['number'];

    if (isPrime($number)) {
        echo $number . " là số nguyên tố.";
    } else {
        echo $number . " không phải là số nguyên tố.";
    }
}

?>

<hr>

<!-- Form nhập số -->
<form method="GET">

    <label>Nhập một số nguyên dương:</label>

    <input type="number" name="number" min="1" required>

    <button type="submit">Kiểm tra</button>

</form>


<hr>


<?php

// ================================
// PHẦN 2: IN SỐ NGUYÊN TỐ 1-100
// ================================

echo "<h3>Các số nguyên tố từ 1 đến 100:</h3>";

for ($i = 1; $i <= 100; $i++) {

    if (isPrime($i)) {
        echo $i . " ";
    }
}

?>