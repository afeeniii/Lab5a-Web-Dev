<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
    $name = "Nazlia Afniza binti Jamaluddin";
    $matricNumber = "AI220363";  
    $course = "Bachelor of Computer Science with Honours (Technology Web)";
    $yearOfStudy = "3rd Year";
    $address = "Lot 2812-10, Lorong Changkat Permai, Kampung Changkat, 53100 Gombak, Kuala Lumpur";  
    ?>

<table border="1">
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td><strong>Matric Number</strong></td>
            <td><?php echo "$matricNumber"; ?></td>
        </tr>
        <tr>
            <td><strong>Course</strong></td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td><strong>Year of Study</strong></td>
            <td><?php echo "$yearOfStudy"; ?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>
</html>
