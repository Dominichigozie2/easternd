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


if(isset($_POST['Submit'])){

    $date = date('Y-m-d');    
    $eventlink = mysqli_real_escape_string($conn, $_POST['eventlink']);
    $etitle = mysqli_real_escape_string($conn, $_POST['eventname']);
    $edesc = mysqli_real_escape_string($conn, $_POST['eventdescription']);

    $image = $_FILES['eventimage']['name'];

    $tmp_name = $_FILES['eventimage']['tmp_name'];

    move_uploaded_file($tmp_name, "upload/$image");


    if(!empty($etitle) && !empty($edesc) && !empty($image) OR !empty($eventlink)){
        $sql = "INSERT INTO event_tb (etitle, ewriteup, elink, eimage, edate) VALUES ('$etitle', '$edesc','$eventlink','$image','$date')";
        $result = mysqli_query($conn, $sql);

    if($result){
        echo '<script>alert("event Added Successfully")</script>';
        echo '<script>window.location.href="eventadd.php"</script>';
    }else{
        echo '<script>alert("An error occured"</script>';
    }

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
                                        premium
                                        Brand</a></li>
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
                                        Calidon's
                                        Brand</a></li>
                        </ul>
                    </li>
                    <li class="list-item active">
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
                    <h3>For the event </h3>

                    <div class="input-field">
                        <label for="input">enter the event image</label>
                        <input type="file" placeholder="Enter for the first Image" name="eventimage" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter the Event Title</label>
                        <input type="text" placeholder="Enter for the event name" name="eventname" id="">
                    </div>
                    <div class="input-field">
                        <label for="input">enter Social media Link</label>
                        <input type="text" placeholder="Enter for the event link" name="eventlink" id="">
                    </div>
                    <div class="input-field textarea">
                        <label for="input">enter the Descriptions</label>
                        <textarea name="eventdescription" ></textarea>
                    </div>
                    <button name="Submit">Save Changes</button>
                </form>
            </main>
        </div>
        <script src="./js/script.js"></script>
    </body>
</html>