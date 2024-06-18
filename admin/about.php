<?php
// Start the session
session_start();
include_once '../include/config.php';


// Check if the session variable is not set
if (!isset($_SESSION['uname'])) {
    header('Location: index.php');
    exit; // Ensure that no further code is executed after redirection
} else {
    $user = $_SESSION['uname'];
    $sql = "SELECT * FROM admin_tb WHERE uname='$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
}



if (isset($_POST['Submit'])) {
    $fields = [];
    $values = [];

    if (!empty($_FILES['firstdesimage']['name'])) {
        $fimage = $_FILES['firstdesimage']['name'];
        move_uploaded_file($_FILES['firstdesimage']['tmp_name'], "upload/$fimage");
        $fields[] = 'afimage';
        $values[] = "'$fimage'";
    }
    if (!empty($_FILES['seconddesimage']['name'])) {
        $simage = $_FILES['seconddesimage']['name'];
        move_uploaded_file($_FILES['seconddesimage']['tmp_name'], "upload/$simage");
        $fields[] = 'asimage';
        $values[] = "'$simage'";
    }
    if (!empty($_FILES['thirddesimage']['name'])) {
        $timage = $_FILES['thirddesimage']['name'];
        move_uploaded_file($_FILES['thirddesimage']['tmp_name'], "upload/$timage");
        $fields[] = 'atimage';
        $values[] = "'$timage'";
    }
    if (!empty($_FILES['firstimage']['name'])) {
        $ftimage = $_FILES['firstimage']['name'];
        move_uploaded_file($_FILES['firstimage']['tmp_name'], "upload/$ftimage");
        $fields[] = 'aftimage';
        $values[] = "'$ftimage'";
    }
    if (!empty($_FILES['secondimage']['name'])) {
        $fthimage = $_FILES['secondimage']['name'];
        move_uploaded_file($_FILES['secondimage']['tmp_name'], "upload/$fthimage");
        $fields[] = 'afthimage';
        $values[] = "'$fthimage'";
    }
    if (!empty($_FILES['thirdimage']['name'])) {
        $sxtimage = $_FILES['thirdimage']['name'];
        move_uploaded_file($_FILES['thirdimage']['tmp_name'], "upload/$sxtimage");
        $fields[] = 'asximage';
        $values[] = "'$sxtimage'";
    }
    if (!empty($_FILES['forthimage']['name'])) {
        $svimage = $_FILES['forthimage']['name'];
        move_uploaded_file($_FILES['forthimage']['tmp_name'], "upload/$svimage");
        $fields[] = 'asvimage';
        $values[] = "'$svimage'";
    }
    if (!empty($_FILES['fthimage']['name'])) {
        $eimage = $_FILES['fthimage']['name'];
        move_uploaded_file($_FILES['fthimage']['tmp_name'], "upload/$eimage");
        $fields[] = 'aetimage';
        $values[] = "'$eimage'";
    }

    if (!empty($fields) && !empty($values)) {
        $fields_str = implode(", ", $fields);
        $values_str = implode(", ", $values);

        $sql = "INSERT INTO about_tb ($fields_str) VALUES ($values_str)";

        // Debugging: Print the SQL query
        echo "SQL Query: $sql<br>";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script>alert("About Added Successfully")</script>';
            // echo '<script>window.location.href="about.php"</script>';
        } else {
            echo '<script>alert("An error occurred: ' . mysqli_error($conn) . '")</script>';
        }
    } else {
        echo '<script>alert("No files were uploaded.")</script>';
    }
}

?>



        <?php
            include_once './loader.php';
        ?>

        <div class="container">
            <div class="nav">
                <a href="#"><i class="fa-solid fa-times"></i></a>
                <div class="logo">
                    <img src="../img/logo.png" alt>
                </div>
                <ul>
                    <li class="list-item">
                        <a href="./index1.php"><i
                                class="fa-solid fa-border-all"></i>
                            Dashboard</a>
                    </li>
                    <li class="list-item active">
                        <a><i
                                class="fa-solid fa-address-card"></i>About</a>
                        <ul>
                            <li><a href="./about.php"><i
                                        class="fa-solid fa-pen-to-square"></i>
                                    Update New</a></li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <a><i
                                class="fa-solid fa-bottle-water"></i>premium
                            Brand</a>
                        <ul>
                            <li><a href="./brandPadd.php"><i
                                        class="fa-solid fa-file-circle-plus"></i>
                                    Add New</a></li>
                            <li><a href="./brandplist.php"><i
                                        class="fa-solid fa-pen-to-square"></i>
                                    Premium Brands</a></li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <a><i
                                class="fa-solid fa-bottle-water"></i>Calidon's
                            Brand</a>
                        <ul>
                            <li><a href="./brandcadd.php"><i
                                        class="fa-solid fa-file-circle-plus"></i>
                                    Add New</a></li>
                            <li><a href="./brandclist.php"><i
                                        class="fa-solid fa-pen-to-square"></i>
                                    Calidon's</a></li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <a><i class="fa-solid fa-calendar-check"></i>Events</a>
                        <ul>
                            <li><a href="./eventadd.html"><i
                                        class="fa-solid fa-file-circle-plus"></i>
                                    Add New</a></li>
                            <li><a href="./events.html"><i
                                        class="fa-solid fa-pen-to-square"></i>
                                    events</a></li>
                        </ul>
                    </li>

                </ul>
                <li><a href="./logout.php"><i
                            class="fa-solid fa-right-from-bracket"></i>
                        Logout</a></li>
            </div>
            <main class="main">
                <nav>
                    <a href="#"><i class="fa-solid fa-bars"></i></a>


                    <div class="admin-details">
                        <div class="admin-image">
                            <img src="../img/adminpic.jpg" alt>
                        </div>
                        <div class="admin-info">
                            <h3><?php
                                echo $row[1];
                            ?></h3>
                            <p>Admin</p>
                        </div>
                    </div>
                </nav>
                <br>
                <br>
                <br>
            
                <form action="#" method="post" ecrypt="multipart/form-data">
                    <h3>For three images in the about description </h3>

                    <div class="input-field">
                        <label for="input">enter the first image</label>
                        <input type="file" placeholder="Enter for the first Image" name="firstdesimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the second image</label>
                        <input type="file" placeholder="Enter for the second Image" name="seconddesimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the third image</label>
                        <input type="file" placeholder="Enter for the third Image" name="thirddesimage" id="">
                    </div>

                    <h3>for the five images in the about</h3>
                    <div class="input-field">
                        <label for="input">enter the first image</label>
                        <input type="file" placeholder="Enter for the first Image" name="firstimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the second image</label>
                        <input type="file" placeholder="Enter for the second Image" name="secondimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the third image</label>
                        <input type="file" placeholder="Enter for the third Image" name="thirdimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the forth image</label>
                        <input type="file" placeholder="Enter for the forth Image" name="forthimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the last image</label>
                        <input type="file" placeholder="Enter for the last Image" name="fthimage" id="">
                    </div>

                    <button name="Submit">Save Changes</button>
                </form>
            </main>
        </div>
        <script src="./js/script.js"></script>
    </body>
</html>