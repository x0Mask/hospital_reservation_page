<?php
include "config.php";

// Send information
// $pName = $_POST['name'];
// $pEmail = $_POST['email'];
// $pDate = $_POST['date'];
// $pSend = $_POST['send'];

// if ($pSend) {
//     $query = "INSERT INTO patients(name,email,date) VALUE('$pName','$pEmail','$pDate')";
//     $result = mysqli_query($conn, $query);
//     echo "<p style='color:green'>تم الحجز</p>";
// } else {
//     echo "<p style='color:red'>..عفواً حدث خطأ</p>";
// };

$pName = htmlspecialchars(strip_tags($_POST['name']));
$pEmail = htmlspecialchars(strip_tags($_POST['email']));
$pDate = htmlspecialchars(strip_tags($_POST['date']));
$pSend = isset($_POST['send']);

if (empty($pName) || !filter_var($pEmail, FILTER_VALIDATE_EMAIL) || empty($pDate)) {
    header("Location: index.php?status=error");
    exit();
} else {
    if ($pSend) {
        // Use a prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO patients (name, email, date) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $pName, $pEmail, $pDate); // "sss" indicates that the parameters are strings

        if ($stmt->execute()) {
            header("Location: index.php?status=success");
            exit();
        } else {
            header("Location: index.php?status=error");
            exit();
        }

        $stmt->close();
    };
};
