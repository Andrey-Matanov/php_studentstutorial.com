<!DOCTYPE html>
<html>

<body>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM persons");

    if (mysqli_num_rows($result) > 0) {
        ?>
        <table>

            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Phone number</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["NAME"]; ?>
                    </td>
                    <td>
                        <?php echo $row["LAST_NAME"]; ?>
                    </td>
                    <td>
                        <?php echo $row["PHONE_NUMBER"]; ?>
                    </td>

                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
        <?php
    } else {
        echo "No result found";
    }
    ?>
</body>

</html>