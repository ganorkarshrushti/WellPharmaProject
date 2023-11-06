<?php
include "config.php";


$query = "SELECT * FROM contact";
$data = mysqli_query($conn, $query);
$total_rows = mysqli_num_rows($data);

echo $total_rows;

if ($total_rows != 0) {
    ?>
    <table border="1">
        <tr>
            <th>NAME</th>
            <th>PHONE NUMBER</th>
            <th>EMAIL</th>
            <th>MESSAGE</th>
            <th colspan="2"></th>
        </tr>

        <?php
        while ($result = mysqli_fetch_array($data)) {
            echo "<tr>
                <td>" . $result['Name'] . "</td>
                <td>" . $result['Phone number'] . "</td>
                <td>" . $result['Email'] . "</td>
                <td>" . $result['Message'] . "</td>
            </tr>";
        }
        ?>
    </table>
    <?php
} else {
    echo "No records";
}
?>
