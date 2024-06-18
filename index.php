

<?php
include 'loader.php';
?>

    <div class="firstnav">
        <div class="container firstnav-container">
            <ul class="contact-nav">
                <li><a href="#"><i class="fa-solid fa-phone"></i>
                        <span>+2347066586037</span></a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"></i>
                        <span>sales@easterndistilleries.com</span></a></li>
                <li><a href="#"><i class="fa-solid fa-clock"></i>
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
                <img src="./img/logo.png" alt>
            </div>
            <ul class="nav-list">
                <li class="list-items active"><a href="./index.php">Home</a></li>
                <li class="list-items"><a href="./about.php">about
                        us</a></li>
                <li class="list-items dropdown">
                    <a>Brands <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="./brandP.php">Premium Brands</a></li>
                        <li><a href="./brandC.php">Calidon's Brand</a></li>
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


    <div class="hero">
        <div class="hero-bg"></div>
        <div class="container hero-container">
            <div class="hero-content">
                <h1>Eastern Distilleries <span>&</span> food <span>industries</span> LTD <small>.</small></h1>
                <p>A leading producer of high-quality beverages and food products, renowned for its innovative approach and commitment to excellence. Our diverse range of offerings caters to a wide array of tastes and preferences, ensuring satisfaction for all our customers.</p>

                <a href="./about.php"><span>learn more</span><i class="fa-solid fa-ellipsis"></i> </a>
            </div>
        </div>

    </div>

    <div class="about">
        <div class="container about-container">
            <div class="about-thumbnail">
                <div class="about-title">
                    <h2>About us</h2>
                </div>
                <div class="thumb-1">
                    <img src="./img/thum-1.png" alt>
                </div>
                <div class="thumb-2 span-2"><img src="./img/thum-2.png" alt></div>
            </div>

            <div class="about-content">
                <h3>Eastern Distilleries: A Journey from Humble Beginnings to Beverage Industry Powerhouse</h3>
                <p>Established on March 8th, 1994, Eastern Distilleries and Food Industries Limited has evolved into a
                    prominent entity in Nigeria's beverage and spirit sector. Initially modest, the company commenced
                    operations in Onitsha's Harbour Industrial Layout, near the river Niger, as a burgeoning
                    manufacturing entity, boasting a limited selection of alcoholic brands. Over time, it has expanded
                    its portfolio and garnered recognition as a formidable player in the industry. Today, Eastern
                    Distilleries stands as a testament to growth and resilience, symbolizing the journey from humble
                    beginnings to significant influence within Nigeria's vibrant beverage landscape.</p>
                <a href="./about.php"><span>learn more</span><i class="fa-solid fa-ellipsis"></i> </a>
            </div>
        </div>
    </div>

    <div class="premium">
        <div class="premium-container container">
            <!-- Swiper -->
            <h4>premuim products</h4>
            <div class="swiper mySwiper1" id="FirstSwiper">
                <?php
                $sql = "SELECT * FROM `pbrand_tb`";
                $result = mysqli_query($conn, $sql);


                if (mysqli_num_rows($result)) {
                    ?>
                    <div class="swiper-wrapper" id="wrapper1">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="swiper-slide" id="swiper">
                                <div class="premium-thumb">
                                    <img src="./admin/upload/<?php
                                    echo $row['pbimage'];
                                    ?>" alt>
                                </div>
                                <div class="premuim-content">
                                    <h4><?php
                                    echo $row['pbname']
                                        ?></h4>

                                    <p><?php
                                    echo $row['pbdescription']
                                        ?></p>
                                    <a href="#"><span>Learn more</span><i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                </div>
                            </div>

                            <?php
                        }
                }
                ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <div class="brand">
        <div class="brand-container container">
            <div class="brand-row">
                <div class="col-1">
                    <h4>Calidons Brand</h4>
                    <p>Calidon's Brands stand as beacons of quality and innovation, epitomizing excellence in beverages
                        and spirits. Each product redefines taste and luxury, setting new standards in the industry.
                        <br>
                        <br>
                        Calidon's Brands embody a legacy of excellence, meticulously crafted to surpass expectations.
                        With a relentless commitment to quality and innovation, each product reflects a dedication to
                        perfection. From meticulously sourced ingredients to artisanal craftsmanship, Calidon's Brands
                        stand at the forefront of the beverage and spirits industry, setting new benchmarks for taste
                        and luxury. With a diverse portfolio catering to every palate, Calidon's Brands continue to
                        captivate consumers worldwide, earning trust and admiration with every sip. Whether enjoyed
                        alone or shared among friends, Calidon's Brands remain synonymous with sophistication, elevating
                        every moment into a memorable experience.
                    </p>
                </div>
                <div class="col-2">
                    <img src="./img/about/quality4.jpeg" alt>
                </div>
            </div>
            <?php
            $sql = "SELECT * FROM `calidonb_tb`";
            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result)) {
                ?>
                <swiper-container class="mySwiper2" init="false">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <swiper-slide><img src="./admin/upload/<?php
                            echo $row['cbfimage'];
                        ?>" alt>
                            <h6><a href="./Branddisplay.php?id=<?php
                                echo $row['cbid'];
                            ?>"><?php
                                echo $row['cbname'];
                            ?></a></h6>
                        </swiper-slide>
                        <?php
                    }
                    ?>
                </swiper-container>
                <?php
            }
            ?>
        </div>
    </div>

    <div class="events">
        <div class="event-container container">
            <h4>Recent Events</h4>
            <br>
            
            <?php
            $sql = "SELECT * FROM `event_tb`";
            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result)) {
                ?>
            <swiper-container class="mySwiper3" init="false">
                <swiper-slide>
                    <div class="event-thumb">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="event-date">
                        <?php
                        echo $row['edate'];
                        ?>
                        </div>
                        <img src="./admin/upload/<?php
                        echo $row['eimage'];
                        ?>" alt="">
                    </div>
                    <h6><?php
                        echo $row['etitle'];
                    ?></h6>
                    <p><?php
                        echo $row['ewriteup'];
                    ?></p>
                    <a href="<?php
                        echo $row['elink'];
                    ?>"><span>Learn more</span><i class="fa-solid fa-ellipsis"></i>
                    </a>
                </swiper-slide>
                <?php
            }
            ?>
            </swiper-container>
            <?php
            }
            ?>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        const swiperEl = document.querySelector('swiper-container')
        Object.assign(swiperEl, {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            pagination: {
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            },
        });
        swiperEl.initialize();
    </script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper1", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script>
        const swiperElTwo = document.querySelector('.mySwiper3')
        Object.assign(swiperElTwo, {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            pagination: {
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
            },
        });
        swiperElTwo.initialize();
    </script>

    <script src="./js/script.js"></script>
</body>

</html>