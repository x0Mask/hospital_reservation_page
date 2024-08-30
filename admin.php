<?php
include 'header.php';

?>

<table>
    <th>الرقم</th>
    <th>اسم المريض</th>
    <th>البريد الالكترونى</th>
    <th>التاريخ</th>


<?php
include 'config.php';

if (isset($conn)) {
    // Import patients information from the database

    $query = "SELECT * FROM patients";
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
} else {
        echo "Database Doesn't Connected";
};


?>