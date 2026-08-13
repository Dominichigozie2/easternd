<?php
// Start the session
session_start();
include_once '../include/config.php';


// Check if the session variable is not set
if (!isset($_SESSION['uname'])) {
    header('Location: index.php');
    exit; // Ensure that no further code is executed after redirection
}else{
    $user = $_SESSION['uname'];
    $sql = "SELECT * FROM admin_tb WHERE uname='$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
}


if (isset($_POST['Submit'])) {
    $bname = mysqli_real_escape_string($conn, $_POST['brandname']);
    $bcat = mysqli_real_escape_string($conn,$_POST['brandCat']);
    $bdesc = mysqli_real_escape_string($conn,$_POST['branddescription']);
    $fbsize = mysqli_real_escape_string($conn,$_POST['fisrtbrandsize']);
    $fbbottle = mysqli_real_escape_string($conn,$_POST['firstbrandbottle']);
    $sbsize = mysqli_real_escape_string($conn,$_POST['secondbrandsize']);
    $sbbottle = mysqli_real_escape_string($conn,$_POST['secondbrandbottle']);
    $tbsize = mysqli_real_escape_string($conn,$_POST['thirdbrandsize']);
    $tbbottle = mysqli_real_escape_string($conn,$_POST['thirdbrandtype']);
    $ftbsize = mysqli_real_escape_string($conn,$_POST['forthbrandsize']);
    $ftbbottle = mysqli_real_escape_string($conn,$_POST['forthbrandtype']);

    $fimage = $_FILES['firstdesimage']['name'];
    $simage = $_FILES['seconddesimage']['name'];
    $timage = $_FILES['thirddesimage']['name'];
    $ftimage = $_FILES['forthdesimage']['name'];


    $tmp_name1 = $_FILES['firstdesimage']['tmp_name'];
    $tmp_name2 = $_FILES['seconddesimage']['tmp_name'];
    $tmp_name3 = $_FILES['thirddesimage']['tmp_name'];
    $tmp_name4 = $_FILES['forthdesimage']['tmp_name'];


    move_uploaded_file($tmp_name1, "upload/$fimage");
    move_uploaded_file($tmp_name2, "upload/$simage");
    move_uploaded_file($tmp_name3, "upload/$timage");
    move_uploaded_file($tmp_name4, "upload/$ftimage");
    
    if(!empty($bname) && !empty($bcat) && !empty($bdesc) && !empty($fbsize) && !empty($fbbottle) OR !empty($sbsize) OR !empty($sbbottle) OR !empty($tbsize) OR !empty($tbbottle) OR !empty($ftbsize) OR !empty($ftbbottle)  && !empty($fimage) OR !empty($simage) OR !empty($timage) OR !empty($ftimage)){

        $sql = "INSERT INTO calidonb_tb(cbname,cbcat,cbdesc,cbfsize,cbfbottle,cbssize,cbsbottle,cbtsize,cbtbottle,cbftsize,cbftbottle,cbfimage,	cbsimage,cbtimage,cbftimage)VALUES('$bname','$bcat','$bdesc','$fbsize','$fbbottle','$sbsize','$sbbottle','$tbsize','$tbbottle','$ftbsize','$ftbbottle','$fimage','$simage','$timage','$ftimage')";

        $result = mysqli_query($conn, $sql);
        if($result){
            echo '<script>alert("Brand Added Successfully")</script>';
            echo '<script>window.location.href="brandcadd.php"</script>';
        }else{
            echo '<script>alert("An error occured")</script>';
        }
    }else{
        echo '<script>alert("Please make sure you fill the fields correctly")</script>';
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
                    <li class="list-item">
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
                                    Premium brands</a></li>
                        </ul>
                    </li>

                    <li class="list-item active">
                        <a><i
                                class="fa-solid fa-bottle-water"></i>Calidon's
                            Brand</a>
                        <ul>
                            <li><a href="./brandcadd.php"><i
                                        class="fa-solid fa-file-circle-plus"></i>
                                    Add New</a></li>
                            <li><a href="./brandclist.php"><i
                                        class="fa-solid fa-pen-to-square"></i>
                                    Calidon's brands</a></li>
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
            
                <form action="#" method="post" enctype="multipart/form-data">
                    <h3>For Four images in the calidon's brand display</h3>

                    <div class="input-field">
                        <label for="input">enter the first image</label>
                        <input type="file" placeholder="Enter for the first Image" name="firstdesimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the Second image</label>
                        <input type="file" placeholder="Enter for the first Image" name="seconddesimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the third image</label>
                        <input type="file" placeholder="Enter for the first Image" name="thirddesimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the four image</label>
                        <input type="file" placeholder="Enter for the four Image" name="forthdesimage" id="">
                    </div>

                    <h3>The brand details</h3>

                    <div class="input-field">
                        <label for="input">enter the Brand name</label>
                        <input type="text" placeholder="Enter for the Brand name" name="brandname" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the Brand category</label>
                        <input type="text" placeholder="Enter for the Brand Category" name="brandCat" id="">
                    </div>

                    <div class="input-field textarea">
                        <label for="input">enter the Descriptions</label>
                        <textarea name="branddescription" ></textarea>
                    </div>

                    <h3>The product sizes</h3>

                    <div class="input-field">
                        <label for="input">enter the first Size</label>
                        <input type="text" placeholder="Enter for the Brand Size" name="fisrtbrandsize" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the first Brand bottle type</label>
                        <input type="text" placeholder="Enter for the Brand bottle" name="firstbrandbottle" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the second Size</label>
                        <input type="text" placeholder="Enter for the Brand Size" name="secondbrandsize" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the second Brand bottle type</label>
                        <input type="text" placeholder="Enter for the Brand type" name="secondbrandbottle" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the third Size</label>
                        <input type="text" placeholder="Enter for the Brand bottle size" name="thirdbrandsize" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the third Brand  bottle type</label>
                        <input type="text" placeholder="Enter for the Brand type" name="thirdbrandtype" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the forth size</label>
                        <input type="text" placeholder="Enter for the Brand Size" name="forthbrandsize" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the forth Brand bottle type</label>
                        <input type="text" placeholder="Enter for the Brand type" name="forthbrandtype" id="">
                    </div>
                    <button name="Submit">Save Changes</button>
                </form>
            </main>
        </div>
        <script src="./js/script.js"></script>
    </body>
</html>