<?php
$arr = getenv();
print_r($arr);
// $servername = $_ENV['SERVERNAME'];
$servername = getenv('SERVERNAME');
echo ($servername);
$username = $_ENV['USERNAME'];
$password = $_ENV['PASSWORD'];
$dbname = $_ENV['DB_NAME'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
}
?>