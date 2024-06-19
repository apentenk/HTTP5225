<?php
include ('functions.php');
if (isset($_POST['addSchool'])) {
    // print_r($_POST);
    $id = $_POST['id'];
    $schoolName = $_POST['schoolName'];
    $schoolLevel = $_POST['schoolLevel'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Connection string
    include ('../reusable/conn.php');
    $query = "UPDATE schools SET
                `School Name`='". mysqli_real_escape_string($connect, $schoolName) ."', 
                `School Level`='". mysqli_real_escape_string($connect, $schoolLevel) ."', 
                `Phone` ='". mysqli_real_escape_string($connect, $phone) ."', 
                `Email` ='". mysqli_real_escape_string($connect, $email) ."'
                WHERE id=". mysqli_real_escape_string($connect, $id);

    $school = mysqli_query($connect, $query);

    if ($school) {
        set_message('School was updated successfully!', 'success');
        header("Location: ../index.php");
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "You should not be here!";
}








