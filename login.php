
<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px auto;
            max-width: 300px;
            background-color: beige;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            justify-content: center;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px auto;
            max-width: 300px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Login Page</h2>
    <form onsubmit="return validateLogin()" method="post">
        <input type="text" id="username" placeholder="User ID" required>
        <input type="password" id="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <script>
        function validateLogin() {
            // Predefined user credentials
            const validUserId = "Shreshth";
            const validPassword = "S@123";

            // Fetch user input
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            // Check if the input matches the predefined credentials
            if (username === validUserId && password === validPassword) {
                // alert("Login successful.");
                window.location.href = "./showdata.php";
                return true;
            } else {
                alert("Invalid credentials.");
                return false;
            }
        }
    </script>
</body>
</html> -->



<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        /* Styles as before */
    </style>
</head>
<body>
    <h2>Login Page</h2>
    <form method="post">
        <input type="text" name="username" placeholder="User ID" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>



<?php
if (isset($_POST['login'])) {
    // Predefined user credentials
    $validUserId = "Shreshth";
    $validPassword = "S@123";

    // Fetch user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the input matches the predefined credentials
    if ($username === $validUserId && $password === $validPassword) {
        // Redirect to "showdata.php" after successful login
        header("Location: showdata.php");
        exit; // Make sure to exit after redirection
    } else {
        echo '<script>alert("Invalid credentials.");</script>';
    }
}
?>

