<?php

$link = mysqli_connect("baders.database.windows.net", "bader13", "Badera380", "");

$sql = "INSERT INTO clients VALUES ('Peter', 'Parker', 'peterparker@mail.com')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>