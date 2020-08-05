<html>

<head>
    <title>Comments</title>
    

</head>

<body>
    
    <?php
    session_start();
    require_once('connection.php');
    $conn = mysqli_connect("localhost","root","","UserData");
    if($conn-> connect_error){
        die("Connection Faile:". $conn -> connect_error);
    }

    $sql = "SELECT name,email,comment FROM userdetails";
    $result = $conn->query($sql);


    if($result -> num_rows>0){
        while($row=$result->fetch_assoc()){ ?>
            <div>
            <h3><?php echo" ". $row["name"] ." ";?></h3>
            <h4><?php echo" ". $row["email"] ." ";?></h4>
            <h3><?php echo" ". $row["comment"] .""; ?></h3>
            </div>  <?php 
        }
        
    }

    else{
        echo "0 result";
    }

    $conn ->close();
    ?>
    


</body>

</html> 