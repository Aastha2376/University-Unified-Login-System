<?php 
    include("connection.php");
    include("login.php")
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Login</title>
    <style>
        .logintitle {
        display: inline-block;
	    background-color: white;
	    
	    margin-bottom: 10px;
       }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="logintitle">
        <br><h1><b>Unified University Login Portal</b></h1>
       </div>
        <form id="loginForm">
            <br><br><input type="text" placeholder="Enter Username" name="user" required>
            <br><input type="password" placeholder="Enter Password" name="pass" required>
            <br><input type="text" placeholder="Enter PRN" name="prn" required>
            <br><br><br><br><br><button type="submit" name="submit">Login</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
