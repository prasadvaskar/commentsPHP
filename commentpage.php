<html>

<head>
    <title>Comments</title>
    <link rel="stylesheet" href="css/commentstyles.css">

</head>

<body>

<a href="index.php">Post a Comment</a>
    
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
            <div id="box" class="box">
            <h4><?php echo" ". $row["name"] ." ";?></h4>
            <h5><?php echo" ". $row["email"] ." ";?></h5>
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