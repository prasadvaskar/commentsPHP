<html>

<head>
    <title>Enter Details</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    
</head>

<body>
    <div class ="div1" id="box">
        <form id="for1" action="postingdata.php" method="POST">
        
            <input type="text" id="name" name="name" placeholder="Enter Name" required>
            <input type="email" id="email" name="email" placeholder="Enter Email" required>
            <input type="text" id="comment" name="comment" placeholder="Comment Here..." required>
            
            <button id ="btn" type ="submit">Submit</button>
        </form>
        
    </div>
</body>


</html>