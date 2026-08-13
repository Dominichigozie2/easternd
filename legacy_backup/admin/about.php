<?php
session_start();
include_once '../include/config.php';

// Check if the session variable is not set
if (!isset($_SESSION['uname'])) {
    header('Location: index.php');
    exit;
} else {
    $user = $_SESSION['uname'];
    $sql = "SELECT * FROM admin_tb WHERE uname=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_row($result);
    mysqli_stmt_close($stmt);
}

if (isset($_POST['Submit'])) {

    $images = [
        'fimage' => 'afimage',
        'secondimage' => 'asimage',
        'thirdimage' => 'atimage',
        'forthimage' => 'aftimage',
        'fifthimage' => 'afthimage',
        'sixthimage' => 'asximage',
        'seventhimage' => 'asvimage',
        'eightimage' => 'aetimage'
    ];

    $update_fields = [];
    $update_values = [];
    $file_paths = [];

    foreach ($images as $input_name => $db_column) {
        if (isset($_FILES[$input_name]) && $_FILES[$input_name]['error'] === UPLOAD_ERR_OK) {
            $file_name = basename($_FILES[$input_name]['name']);
            $tmp_name = $_FILES[$input_name]['tmp_name'];
            $upload_dir = "aboutimage/";
            $file_path = $upload_dir . $file_name;

            if (move_uploaded_file($tmp_name, $file_path)) {
                $update_fields[] = "$db_column = ?";
                $update_values[] = $file_name;
                $file_paths[$input_name] = $file_path;
            } else {
                echo '<script>alert("Failed to upload ' . $file_name . '");</script>';
                exit;
            }
        }
    }

    if (!empty($update_fields)) {
        $update_fields_str = implode(", ", $update_fields);
        $sql = "UPDATE about_tb SET $update_fields_str WHERE aid = ?";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            // Determine the types for binding parameters
            $types = str_repeat('s', count($update_values)) . 'i'; // Assuming 'i' for integer primary key
            $update_values[] = 1; // Replace with your actual primary key value

            mysqli_stmt_bind_param($stmt, $types, ...$update_values);

            if (mysqli_stmt_execute($stmt)) {
                echo '<script>alert("Images updated successfully."); window.location.href="about.php";</script>';
            } else {
                echo '<script>alert("An error occurred: ' . mysqli_stmt_error($stmt) . '");</script>';
            }

            mysqli_stmt_close($stmt);
        } else {
            echo '<script>alert("Failed to prepare the SQL statement.");</script>';
        }
    } else {
        echo '<script>alert("No images to update.");</script>';
    }
}
?>
`



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
                            <li><a href="./eventadd.php"><i
                                        class="fa-solid fa-file-circle-plus"></i>
                                    Add New</a></li>
                            <li><a href="./events.php"><i
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
            
                <form action="#" method="POST" enctype="multipart/form-data">

                    <h3>For three images in the about description </h3>

                    <div class="input-field">
                        <label for="input">enter the first image</label>
                        <input type="file" placeholder="Enter for the first Image" name="fimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the second image</label>
                        <input type="file" placeholder="Enter for the second Image" name="secondimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the third image</label>
                        <input type="file" placeholder="Enter for the third Image" name="thirdimage" id="">
                    </div>

                    <h3>for the five images in the about</h3>
                    <div class="input-field">
                        <label for="input">enter the first image</label>
                        <input type="file" placeholder="Enter for the first Image" name="forthimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the second image</label>
                        <input type="file" placeholder="Enter for the second Image" name="fifthimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the third image</label>
                        <input type="file" placeholder="Enter for the third Image" name="sixthimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the forth image</label>
                        <input type="file" placeholder="Enter for the forth Image" name="seventhimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the last image</label>
                        <input type="file" placeholder="Enter for the last Image" name="eightimage" id="">
                    </div>

                    <button type="submit" name="Submit">Save Changes</button>
                </form>
            </main>
        </div>
        <script src="./js/script.js"></script>
    </body>
</php>