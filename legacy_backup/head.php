<?php
include_once 'include/config.php';
include 'loader.php';
?>

<div class="firstnav">
    <div class="container firstnav-container">
        <ul class="contact-nav">
            <li><a href="tel:+234(0)803-316-6700"><i class="fa-solid fa-phone"></i>
                    <span>+234(0)803-316-6700</span></a></li>
            <li><a href="mailto:sales@easterndistilleries.com"><i class="fa-solid fa-envelope"></i>
                    <span>sales@easterndistilleries.com</span></a></li>
            <li><a href="contact.php"><i class="fa-solid fa-clock"></i>
                    <span>24/7 customer
                        support</span></a></li>
        </ul>
        <div class="media">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>
</div>
<nav>
    <div class="container nav-container">
        <div class="logo">
            <a href="index.php"><img src="./img/EDFI LOGO.png" alt></a>
        </div>
        <ul class="nav-list">
            <li class="list-items"><a href="./index.php">Home</a></li>
            <li class="list-items"><a href="./about.php">Our company</a></li>
            <li class="list-items"><a href="./events.php">News & Events</a></li>
            <li class="list-items dropdown">
                <a>Products<i class="fa-solid fa-chevron-down"></i></a>

                <ul class="dropdown-menu">

                    <?php
                     $sql = "SELECT * FROM pbrand_tb";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result)) {
                        ?>
                        <ul>
                            <h1>Premium brands</h1>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <li><a href="premiumdisplay.php?id=<?php
                                echo $row['pbid'];
                                ?>"><?php
                                echo $row['pbname'];
                                ?></a></li>
                               
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                    <?php
                    $sql = "SELECT * FROM `calidonb_tb`";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result)) {
                        ?>
                        <ul>
                            <h1>calidon's brands</h1>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <li><a href="./Branddisplay.php?id=<?php
                                echo $row['cbid'];
                                ?>"><?php
                                echo $row['cbname'];
                                ?></a></li>
                                
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                    <!-- Add more brands as needed -->
                </ul>

            </li>
            <li class="list-items"><a href="https://krisoralgroup.com/">corporate
                    social responsibilities</a></li>
            <li class="list-items"><a href="./contact.php">contact</a></li>
        </ul>
        <div class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</nav>