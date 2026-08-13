<?php
include 'head.php';
?>

       
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="grid-system">
        <?php
                $sql = "SELECT * FROM `pbrand_tb`";
                $result = mysqli_query($conn, $sql);


                if (mysqli_num_rows($result)) {
                    ?>
            <div class="grid-container container">
            <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                <div class="grid-box">
                    <div class="grid-box-image">
                        <img src="./admin/upload/<?php echo $row['pbimage']; ?>" alt="">
                    </div>
                    <div class="grid-box-content">
                        <h6>Calidon's Brands</h6>
                        <h5><?php
                            echo $row['pbname'];
                        ?></h5>
                        <a href="./Branddisplay.php?id=<?php echo $row['pbid']; ?>">View Details</a>
                    </div>
                </div>
                <?php
                        }
                ?>
            </div>
            <?php
                }
            ?>
        </div>

        
        <div class="footer">
            <div class="container footer-container">
                <div class="footer-logo">
                    <img src="./img/logo.png" alt="">
                </div>
                <div class="footer-ul">
                    <ul>
                        <h5>Useful</h5>
                        <li><a href="./index.php">home</a></li>
                        <li><a href="./about.php">about</a></li>
                        <li><a href="./brandP.php">premium brands</a></li>
                    </ul>
                    <ul>
                        <h5></h5>
                        <li><a href="./brandC.php">calidon brands</a></li>
                        <li><a href="krisoral.com">cooperate social responsibilities</a></li>
                        <li><a href="./contact.php">contact</a></li>
                    </ul>
                    <ul>
                        <h5>our info</h5>
                        <li><a href="#"><i class="fa-solid fa-phone"></i>
                            <span>+2347066586037</span></a></li>
                    <li><a href="#"><i
                                class="fa-solid fa-envelope"></i>
                            <span>sales@easterndistilleries.com</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-clock"></i>
                            <span>24/7 customer
                                support</span></a></li>
                    </ul>
                </div>
                <div class="footer-media">
                    <a href="#"><i
                        class="fa-brands fa-facebook"></i></a>
                <a href="#">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="#"><i
                        class="fa-brands fa-instagram"></i></a>
                <a href="#"><i
                        class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
            <h6>eastern distillaries and food industries limited 2024, all right reserved.</h6>
        </div>
        <script src="./js/script.js"></script>
    </body>
    </html>