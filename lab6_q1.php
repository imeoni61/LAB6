<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
<?php
// Variables with your details
$name = "Ling Hwei Sze, Eleora";
$matric = "AI230129";
$course = "Bachelor of Computer Science(Multimedia Computing) with Honours";
$year = "Year 2";
$address = "UTHM, Parit Raja, Batu Pahat, Johor";
?>

<!-- Display in HTML table -->
<table border="1" cellpadding="8">
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matric; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $year; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
