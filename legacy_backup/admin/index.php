<?php
session_start();
include_once '../include/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetching input values
    $input_username = $_POST['adname'];
    $input_password = $_POST['adpass'];

    // SQL query
    $sql = "SELECT * FROM admin_tb WHERE uname='$input_username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Fetch user data
        $user = mysqli_fetch_row($result);

        // Verify password
        if ($input_password == $user[2] && $input_username == $user[1]) {
            $_SESSION['uname'] = $input_username;
            $success = "Login successful! Welcome, " . htmlspecialchars($input_username) . ".";

            

            echo "<script>
                    setTimeout(function(){
                        window.location.href = 'index1.php';
                    }, 5000);
                  </script>";
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "Invalid username or Password.";
    }

    // Free result set
    mysqli_free_result($result);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./css/loader.css">
    
    </head>

    <body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <br>
        <br>
        <?php
        if (isset($success)) {
            echo '<h6 class="success">' . htmlspecialchars($success) . '</h6>';
        } elseif (isset($error)) {
            echo '<h6 class="error">' . htmlspecialchars($error) . '</h6>';
        }
        ?>

    <br>
    <br>

    <form action="#" method="post" autocomplete="off">
        <div class="input-field">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="adname" autocomplete="off" placeholder="Enter your username">
        </div>
        <div class="input-field">
            <input type="password" name="adpass" autocomplete="off" placeholder="Enter your Password">
            <i class="fa-solid fa-lock"></i>
        </div>
        <button name="submit">Login</button>
    </form>
    </div>
</body>
</html>