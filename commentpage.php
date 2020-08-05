<html>

<head>
    <title>Comments</title>
    

</head>

<body>
    
    <?php
    
    $conn = mysqli_connect("localhost","root","","UserData");
    if($conn-> connect_error){
        die("Connection Faile:". $conn -> connect_error);
    }

    $sql = "SELECT name,email,comment FROM userdetails";
    $result = $conn->query($sql);


    if($result -> num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "<tr><td>". $row["name"] ."</td><td>". $row["email"] ."</td><td>". $row["comment"] ."</td></tr>" ;
        }
        echo "</table>";
    }

    else{
        echo "0 result";
    }

    $conn ->close();
    ?>
    
    </table>
    <a href="index.php">Home</a>
</body>

</html> 