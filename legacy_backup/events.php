<?php
include 'head.php';
?>



<div class="page-hero">
    <div class="page-container container">
        <h3>Brand Activities</h3>
        <div class="click-back-menu">
            <li><a href="./index.php">Home</a></li>
            <li class="thestyle"></li>
            <li>Events</li>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>

<div class="event">
    <div class="container event-container">
        <h4>Keep up with our events</h4>
        <h1>Brand Events</h1>
        <br>
        <br>
        <br>
        <?php
        $sql = "SELECT * FROM `event_tb`";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result)) {
            ?>
            <div class="event-box-container">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $excerpt1 = substr($row['etitle'], 0, 70);
                    ?>
                    <div class="event-box">
                        <div class="event-image">
                        <img src="./admin/upload/<?php
                            echo $row['eimage'];
                            ?>" alt="">
                        </div>
                        <a href="eventdisplay.php?id=<?php echo $row['eid']; ?>" class="event-details">
                            <h6><?php
                                echo $row['edate'];
                                ?></h6>
                            <h4><?php
                        echo $excerpt1;
                        ?> ...</h4>
                        </a>
                    </div>

                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>

        <div class="pagination">
            <ul>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">24</a></li>

            </ul>
        </div>
    </div>
    <div class="quicklink">
        <div class="quicklink-container">
            <h5>Quick link</h5>
            <ul>
                <li><i class="fa-solid fa-arrow-right-long"></i><a href="./events.php">Our company</a></li>
                <li><i class="fa-solid fa-arrow-right-long"></i><a href="./events.php">premium Brands</a></li>
                <li><i class="fa-solid fa-arrow-right-long"></i><a href="./events.php">Calidon's Brands</a></li>
                <li><i class="fa-solid fa-arrow-right-long"></i><a href="./events.php">Contact us</a></li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="new-contaner">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./img/products/brandy.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./img/products/WAKEUP.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./img/products/whisky.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./img/products/Varga.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br>
<br>
<br>
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
                <li><a href="#"><i class="fa-solid fa-envelope"></i>
                        <span>sales@easterndistilleries.com</span></a></li>
                <li><a href="#"><i class="fa-solid fa-clock"></i>
                        <span>24/7 customer
                            support</span></a></li>
            </ul>
        </div>
        <div class="footer-media">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>
    <h6>eastern distillaries and food industries limited 2024, all right reserved.</h6>
</div>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.mySwiper', {
        autoplay: {
            delay: 3000, // 3 seconds delay between slides
            disableOnInteraction: false, // Keep autoplay active after user interaction
        },
        loop: true, // Enable continuous loop mode
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>


<script src="./js/script.js"></script>
</body>

</html>