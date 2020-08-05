<html>
    <body>
        <h3>New record created successfully ! You will be redirected automatically in few seconds</h3>
        <img src="css/images/3.gif" alt="">
    </body>
</html>
<?php
session_start();
require_once('connection.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$name =  $_POST['name'];    
$email = $_POST['email'];
$comment = $_POST['comment'];

$sql = "INSERT INTO userdetails (name,email,comment)
VALUES('$name','$email','$comment')";
if (mysqli_query($conn, $sql)) {
    
    header('Refresh: 3; URL=commentpage.php');
 } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
 }
 
 

$conn->close();



?>
