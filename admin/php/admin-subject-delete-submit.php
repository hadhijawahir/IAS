<?php

include('../../includes/connection.php');

    $id=$_POST['subject_id'];

    $delQuery= "DELETE FROM subjects WHERE subject_id = '$id' ";

    $delResult = mysqli_query ($connection, $delQuery);
    $message = base64_encode(urlencode("Subject Removed Successfully"));
    header('Location:../admin-subject-delete.php?msg=' . $message);
    exit();


mysqli_close($connection);
    
    
?>