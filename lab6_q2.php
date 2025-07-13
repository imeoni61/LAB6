<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Corrected associative array with commas between elements
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ]
];
?>

<table>
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>

    <?php
    // Loop through each student and create a row
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . $student['program'] . "</td>";
        echo "<td>" . $student['age'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
