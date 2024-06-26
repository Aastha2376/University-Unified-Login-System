<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        // Get form data and sanitize inputs
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $prn = mysqli_real_escape_string($conn, $_POST['prn']);

        // Check if inputs are empty
        if (empty($username) || empty($password) || empty($prn)) {
            echo '<script>
                    window.location.href = "index.php";
                    alert("Please enter all fields!!");
                </script>';
            exit(); // Stop further execution
        }

        // Check credentials against database
        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password' AND prn = '$prn'";  
        $result = mysqli_query($conn, $sql);  
        $count = mysqli_num_rows($result);  

        if ($count == 1) {  
            // Credentials are correct, proceed to dashboard
            // No need to redirect here, just return a success message
            echo '<script>
                    alert("Login Successful");
                    window.location.href = "dashboard.html";
                  </script>';
            exit(); // Stop further execution
        } else {  
            // Invalid credentials, display an error message
            echo  '<script>
                        alert("Login failed. Invalid username, password, or PRN!!");
                    </script>';
            exit(); // Stop further execution
        }
    }
?>
