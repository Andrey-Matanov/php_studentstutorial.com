<?php
if (isset($_POST['save'])) {
    $first_name = $_POST['NAME'];
    $last_name = $_POST['LAST_NAME'];
    $phone_number = $_POST['PHONE_NUMBER'];

    $sql = "INSERT INTO persons (`NAME`, `LAST_NAME`, `PHONE_NUMBER`)
	 VALUES ('$first_name','$last_name','$phone_number')";

    if (mysqli_query($conn, $sql)) {
        echo 'New record created successfully ! <br>';
        echo '<a href="http://localhost/studentstutorial.com_tutorial">Back</a>';

    } else {
        echo "Error: " . $sql . " ;" . mysqli_error($conn);
        echo '<a href="http://localhost/studentstutorial.com_tutorial">Back</a>';
    }

    mysqli_close($conn);
}

?>