<?php
// Start the session
session_start();
include_once '../include/config.php';


/// Check if the session variable is not set
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
    $pid = $_GET['id'];
    // Sanitize input
    $bName = mysqli_real_escape_string($conn, $_POST['Brandname']);
    $bDes = mysqli_real_escape_string($conn, $_POST['branddescription']);
    $blink = mysqli_real_escape_string($conn, $_POST['brandlink']);
    $energy = mysqli_real_escape_string($conn, $_POST['energy']);
    $protein = mysqli_real_escape_string($conn, $_POST['protein']);
    $carbohydrate = mysqli_real_escape_string($conn, $_POST['carbohydrate']);
    $fat = mysqli_real_escape_string($conn, $_POST['fat']);
    $dieteryfiber = mysqli_real_escape_string($conn, $_POST['dieteryfiber']);
    $sodium = mysqli_real_escape_string($conn, $_POST['sodium']);
    $ingdt = mysqli_real_escape_string($conn, $_POST['indg']); 

    $launched = mysqli_real_escape_string($conn, $_POST['launched']); 
    $abv = mysqli_real_escape_string($conn, $_POST['abv']); 
    $category = mysqli_real_escape_string($conn, $_POST['category']); 
    $size1 = mysqli_real_escape_string($conn, $_POST['size1']); 
    $size2 = mysqli_real_escape_string($conn, $_POST['size2']); 
    $size3 = mysqli_real_escape_string($conn, $_POST['size3']); 
    
    $img1 = $_FILES['brandimage']['name'];
    $img2 = $_FILES['img1']['name'];
    $img3 = $_FILES['img2']['name'];
    $img4 = $_FILES['img3']['name'];
    // $img5 = $_FILES['img4']['name'];
    // $img6 = $_FILES['img5']['name'];
    // $img7 = $_FILES['img6']['name'];
    $img8 = $_FILES['img7']['name'];

    $tmp_name1 = $_FILES['brandimage']['tmp_name'];
    $tmp_name2 = $_FILES['img1']['tmp_name'];
    $tmp_name3 = $_FILES['img2']['tmp_name'];
    $tmp_name4 = $_FILES['img3']['tmp_name'];
    // $tmp_name5 = $_FILES['img4']['tmp_name'];
    // $tmp_name6 = $_FILES['img5']['tmp_name'];
    // $tmp_name7 = $_FILES['img6']['tmp_name'];
    $tmp_name8 = $_FILES['img7']['tmp_name'];

    // Array to hold the parts of the SQL query
    $updates = [];

    // Add fields to the update array
    if (!empty($bName)) {
        $updates[] = "pbname = '{$bName}'";
    }
    if (!empty($bDes)) {
        $updates[] = "pbdescription = '{$bDes}'";
    }
    if (!empty($blink)) {
        $updates[] = "plink = '{$blink}'";
    }
    if (!empty($energy)) {
        $updates[] = "energy = '{$energy}'";
    }
    if (!empty($protein)) {
        $updates[] = "protein = '{$protein}'";
    }
    if (!empty($carbohydrate)) {
        $updates[] = "carbohydrate = '{$carbohydrate}'";
    }
    if (!empty($fat)) {
        $updates[] = "fat = '{$fat}'";
    }
    if (!empty($dieteryfiber)) {
        $updates[] = "dieteryfiber = '{$dieteryfiber}'";
    }
    if (!empty($sodium)) {
        $updates[] = "sodium = '{$sodium}'";
    }
    if (!empty($ingdt)) {
        $updates[] = "ingredient = '{$ingdt}'"; // Ingredients
    }
    if (!empty($launched)) {
        $updates[] = "launched = '{$launched}'"; // Ingredients
    }
    if (!empty($abv)) {
        $updates[] = "abv = '{$abv}'"; // Ingredients
    }
    if (!empty($category)) {
        $updates[] = "category = '{$category}'"; // Ingredients
    }
    if (!empty($size1)) {
        $updates[] = "size1 = '{$size1}'"; // Ingredients
    }
    if (!empty($size2)) {
        $updates[] = "size2 = '{$size2}'"; // Ingredients
    }
    if (!empty($size3)) {
        $updates[] = "size3 = '{$size3}'"; // Ingredients
    }

    // Handling images and updating the database
    if (!empty($img1)) {
        move_uploaded_file($tmp_name1, "upload/$img1");
        $updates[] = "pbimage = '{$img1}'";
    }
    if (!empty($img2)) {
        move_uploaded_file($tmp_name2, "upload/$img2");
        $updates[] = "pbimage1 = '{$img2}'";
    }
    if (!empty($img3)) {
        move_uploaded_file($tmp_name3, "upload/$img3");
        $updates[] = "pbimage2 = '{$img3}'";
    }
    if (!empty($img4)) {
        move_uploaded_file($tmp_name4, "upload/$img4");
        $updates[] = "pbimage3 = '{$img4}'";
    }
    // if (!empty($img5)) {
    //     move_uploaded_file($tmp_name5, "upload/$img5");
    //     $updates[] = "pbimage4 = '{$img5}'";
    // }
    // if (!empty($img6)) {
    //     move_uploaded_file($tmp_name6, "upload/$img6");
    //     $updates[] = "pbimage5 = '{$img6}'";
    // }
    // if (!empty($img7)) {
    //     move_uploaded_file($tmp_name7, "upload/$img7");
    //     $updates[] = "pbimage6 = '{$img7}'";
    // }
    if (!empty($img8)) {
        move_uploaded_file($tmp_name8, "upload/$img8");
        $updates[] = "pbimage7 = '{$img8}'";
    }

    // Only proceed if there are updates to make
    if (!empty($updates)) {
        $updates_string = implode(', ', $updates);
        $sql = "UPDATE pbrand_tb SET $updates_string WHERE pbid = '{$pid}'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script>alert("Brand Updated Successfully")</script>';
            echo '<script>window.location.href="brandPlist.php"</script>';
        } else {
            echo '<script>alert("An error occurred")</script>';
            echo '<script>window.location.href="brandPlist.php"</script>';
        }
    } else {
        echo '<script>alert("No fields to update")</script>';
        echo '<script>window.location.href="brandPadd.php"</script>';
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
                    <a href="./index1.php"><i class="fa-solid fa-border-all"></i>
                        Dashboard</a>
                </li>
                <li class="list-item">
                    <a><i class="fa-solid fa-address-card"></i>About</a>
                    <ul>
                        <li><a href="./about.php"><i class="fa-solid fa-pen-to-square"></i>
                                Update New</a></li>
                    </ul>
                </li>
                <li class="list-item active">
                    <a><i class="fa-solid fa-bottle-water"></i>premium
                        Brand</a>
                    <ul>
                        <li><a href="./brandPadd.php"><i class="fa-solid fa-file-circle-plus"></i>
                                Add New</a></li>
                        <li><a href="./brandplist.php"><i class="fa-solid fa-pen-to-square"></i>
                                premium
                                Brand</a></li>
                    </ul>
                </li>

                <li class="list-item">
                    <a><i class="fa-solid fa-bottle-water"></i>Calidon's
                        Brand</a>
                    <ul>
                        <li><a href="./brandcadd.php"><i class="fa-solid fa-file-circle-plus"></i>
                                Add New</a></li>
                        <li><a href="./brandclist.php"><i class="fa-solid fa-pen-to-square"></i>
                                Calidon's
                                Brandw</a></li>
                    </ul>
                </li>
                <li class="list-item">
                    <a><i class="fa-solid fa-calendar-check"></i>Events</a>
                    <ul>
                        <li><a href="./eventadd.php"><i class="fa-solid fa-file-circle-plus"></i>
                                Add New</a></li>
                        <li><a href="./events.php"><i class="fa-solid fa-pen-to-square"></i>
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

            <form action="#" method="post" enctype="multipart/form-data">
                <h3>For the premium brand</h3>

                <div class="input-field">
                    <label for="input">enter the first image</label>
                    <input type="file" placeholder="Enter for the first Image" name="brandimage" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter the Brand name</label>
                    <input type="text" placeholder="Enter for the Brand name" name="Brandname" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter the Brand Website Link</label>
                    <input type="text" placeholder="Enter for the Brand Website Link" name="brandlink" id="">
                </div>
                <div class="input-field textarea">
                    <label for="input">enter the descriptions</label>
                    <textarea name="branddescription"></textarea>
                </div>
                <h3>For the premium brand Display</h3>
                <div class="input-field">
                    <label for="input">enter the Brand energy level</label>
                    <input type="text" placeholder="Enter for the Brand energy level" name="energy" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter the Brand protein level</label>
                    <input type="text" placeholder="Enter for the Brand level of protein" name="protein" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter the Brand carbohydrate level</label>
                    <input type="text" placeholder="Enter for the Brand carbohydrate" name="carbohydrate" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter the Brand fat level</label>
                    <input type="text" placeholder="Enter for the Brand level of fat" name="fat" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter the Brand dietery fiber level</label>
                    <input type="text" placeholder="Enter for the Brand dietery fiber level" name="dieteryfiber" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter the Brand sodium level</label>
                    <input type="text" placeholder="Enter for the Brand sodium level" name="sodium" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter Amount</label>
                    <input type="text" placeholder="How many CL is it?" name="launched" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter the Brand ABV</label>
                    <input type="text" placeholder="Enter for the Brand ABV" name="abv" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter the Brand Category</label>
                    <input type="text" placeholder="Enter for the Brand Category" name="category" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter the Brand ingredient (optional)</label>
                    <input type="text" placeholder="Enter for the Brand ingredient" name="indg" id="">
                </div>
                <h3>Enter additional images if it has different sizes (optional)</h3>
                <div class="input-field">
                    <label for="input">enter the 1st Brand image</label>
                    <input type="file" placeholder="Enter for the Brand name" name="img1" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter the 1st size</label>
                    <input type="size1" placeholder="Enter for the Brand size" name="size1" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter the 2nd Brand image</label>
                    <input type="file" placeholder="enter the 2nd Brand image" name="img2" id="">
                </div>
                <div class="input-field">
                <label for="input">enter the 2nd Brand size</label>
                <input type="text" placeholder="Enter for the 2nd Brand size" name="size2" id="">
                </div>
                <div class="input-field">
                    <label for="input">enter the 3rd Brand image</label>
                    <input type="file" placeholder="enter the 3rd Brand image" name="img3" id="">
                </div>
                <div class="input-field">
                <label for="input">Enter the 3rd Brand size</label>
                <input type="text" placeholder="Enter the 3rd Brand size" name="size3" id="">
                </div>
                <div class="input-field">
                <label for="input">enter the Brand Logo</label>
                <input type="file" placeholder="Enter for the Brand Logo" name="img7">
                </div>
                <button name="Submit">Save Changes</button>
            </form>
        </main>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>