<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 7a Q1</title>
</head>

<body>
    <?php

    $name = "MUHAMMAD AFIF ZIKRI BIN KAMALLULLIL";  
    $mNumb = "CI250126";
    $course = "SOFTWARE ENGINEERING";
    $yearOfStudy = "Year 2";
    $addr = "Tun Dr Ismail";

    ?>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$mNumb"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year Of Study</td>
            <td><?php echo "$yearOfStudy"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$addr"; ?></td>
        </tr>
    </table>
</body>

</html>