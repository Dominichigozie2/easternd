<?php
// Start the session
session_start();
include_once '../include/config.php';


// Check if the session variable is not set
if (!isset($_SESSION['uname'])) {
    header('Location: index.php');
    exit; // Ensure that no further code is executed after redirection
}


if (isset($_POST['Submit'])) {

    $pid = $_GET['id'];

    $bName = mysqli_real_escape_string($conn, $_POST['Brandname']);
    $bDes = mysqli_real_escape_string($conn, $_POST['branddescription']);

    $image = $_FILES['brandimage']['name'];

    $tmp_name = $_FILES['brandimage']['tmp_name'];

    move_uploaded_file($tmp_name, "upload/$image");
 

    $sql = "UPDATE pbrand_tb SET pbname = '{$bName}', pbdescription	= '{$bDes}', pbimage = '{$image}' WHERE pbid = '{$pid}'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("Brand Updated Successfully")</script>';
        // echo '<script>window.location.href="brandPedit.php"</script>';
    }else{
        echo '<script>alert("An error occured")</script>';
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
                <div class="input-field textarea">
                    <label for="input">enter the descriptions</label>
                    <textarea name="branddescription"></textarea>
                </div>
                <button name="Submit">Save Changes</button>
            </form>
        </main>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>