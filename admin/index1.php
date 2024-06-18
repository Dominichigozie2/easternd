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
                    <li class="active list-item">
                        <a href="./index1.php"><i class="fa-solid fa-border-all"></i> Dashboard</a>
                    </li>
                    <li class="list-item">
                        <a href="./profile.php"><i class="fa-solid fa-pen-to-square"></i> Login details</a>
                    </li>
                    <li class="list-item">
                        <a><i class="fa-solid fa-address-card"></i>About</a>
                        <ul>
                            <li><a href="./about.php"><i class="fa-solid fa-pen-to-square"></i> Update New</a></li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <a><i class="fa-solid fa-bottle-water"></i>premium Brand</a>
                        <ul>
                            <li><a href="./brandPadd.php"><i class="fa-solid fa-file-circle-plus"></i> Add New</a></li>
                            <li><a href="./brandplist.php"><i class="fa-solid fa-pen-to-square"></i> premium Brand</a></li>
                        </ul>
                    </li>
                    
                    <li class="list-item">
                        <a><i class="fa-solid fa-bottle-water"></i>Calidon's Brand</a>
                        <ul>
                            <li><a href="./brandcadd.php"><i class="fa-solid fa-file-circle-plus"></i> Add New</a></li>
                            <li><a href="./brandclist.php"><i class="fa-solid fa-pen-to-square"></i>Calidon's Brand</a></li>
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
                <li><a href="./logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
            </div>
            <main class="main">
                <nav>
                    <a href="#"><i class="fa-solid fa-bars"></i></a>


                    <div class="admin-details">
                        <div class="admin-image">
                            <img src="../img/adminpic.jpg" alt>
                        </div>
                        <div class="admin-info">
                            <?php
                                echo '<h3>'.$row[1].'</h3>';
                            ?>
                            <p>Admin</p>
                        </div>
                    </div>
                </nav>
                <br>
                <br>
                <br>    
                <div class="display-section">
                    <div class="row">
                        <div class="col">
                            <h2>Premium brands <i class="fa-solid fa-award"></i></h2>
                            <h4>10</h4>
                            <a href="./brandplist.php">View</a>
                        </div>
                        <div class="col">
                            <h2>Calidon's brands <i class="fa-solid fa-copyright"></i></h2>
                            <h4>8</h4>
                            <a href="./brandclist.php">View</a>
                        </div>
                        <div class="col">
                            <h2>Events <i class="fa-solid fa-calendar-days"></i></h2>
                            <h4>2</h4>
                            <a href="./events.php">View</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <script src="./js/script.js"></script>
    </body>
</html>