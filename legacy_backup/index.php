<?php
include 'head.php';
?>



<section class="hero">
    <div class="container hero-container">
        <div class="swiper4 mySwiper4">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <h1 class="">Eastern Distilleries <span>& food industries limited</span></h1>
                    <p class="">A leading Manufacturers of non-alcoholic and alcoholic beverages, renowned for its innovative approach
                        and commitment to excellence. Our diverse range of offerings caters to a wide array of tastes and
                        preferences, ensuring satisfaction for all our consumers.</p>
                    <a href="./about.php" class="animated"><span>learn more</span><i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                <div class="swiper-slide">
                <h3 class=" h1">"INTEGRITY" <br><span>The Foundation of Our Values</span></h3>
                    <p class=" p">Integrity is the cornerstone of all our dealings, be it with our customers, our employees, suppliers, our partners, shareholders and government</p>
                    <a href="./about.php" class="animated"><span>learn more</span><i class="fa-solid fa-arrow-right-long"></i></a>

                </div>
                <div class="swiper-slide">
                <h3 class=" h1">"QUALITY" <br>
                <span>Our Commitment to Excellence</span></h3>
                    <p class=" p">Quality is an underlying trait of Eastern Distilleries and Food Industry, it touches all aspects of our workforce and products.</p>
                    <a href="./about.php" class=""><span>learn more</span><i class="fa-solid fa-arrow-right-long"></i> </a>
                </div>
                
            </div>
        </div>
    </div>
</section>


<section class="about">
    <div class="container about-container">
        <div class="about-image">
            <img src="./img/EDFI LOGO.png" alt="">
        </div>
        <div class="about-content">
            <h3>Welcome to Eastern Distilleries and food industry LTD.</h3>
            <p>We are Eastern Distilleries and food industry LTD, a leading name in the food and beverage manufacturing sector in nigeria. founded with a commitment to qaulity and cost effectiveness, we have grown into a trusted brand, recognized for our premium products and ethical practices.</p>
            <a href="./about.php"><span>learn more</span><i class="fa-solid fa-ellipsis"></i> </a>
        </div>
    </div>
</section>

<section class="premium">
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
                                <a href="premiumdisplay.php?id=<?php
                                echo $row['pbid'] ?>"><span>Learn more</span><i class="fa-solid fa-ellipsis"></i>
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
</section>

<section class="brand">
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
</section>

<section class="events">
    <div class="event-container container">
        <h4>Recent Events</h4>
        <br>

        <?php
        $sql = "SELECT * FROM `event_tb`";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result)) {
            ?>
            <swiper-container class="mySwiper3" init="false">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $excerpt1 = substr($row['etitle'], 0, 70);
                    ?>
                    <swiper-slide>
                        <div class="event-thumb">
                            <div class="event-date">
                                <?php
                                echo $row['edate'];
                                ?>
                            </div>
                            <img src="./admin/upload/<?php
                            echo $row['eimage'];
                            ?>" alt="">
                        </div>
                        <a href="./eventdisplay.php?id=<?php
                        echo $row['eid'] ?>"><?php
                         echo $excerpt1;
                         ?> ...</a>

                    </swiper-slide>
                    <?php
                }
                ?>
            </swiper-container>
            <?php
        }
        ?>
    </div>
</section>

<section class="footer">
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
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>







<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper4", {
      direction: "vertical",
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    autoplay:{
        delay: 5000,
    }
    });
  </script>


<script>
    const swiperEl = document.querySelector('.mySwiper2')
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
                slidesPerView: 3,
                spaceBetween: 15,
            },
        },
    });
    swiperElTwo.initialize();
</script>

<script src="./js/script.js"></script>
<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
<script>
    var wa_btnSetting = { "btnColor": "#16BE45", "ctaText": "WhatsApp Us", "cornerRadius": 40, "marginBottom": 20, "marginLeft": 20, "marginRight": 20, "btnPosition": "right", "whatsAppNumber": "911234567890", "welcomeMessage": "Hello", "zIndex": 999999, "btnColorScheme": "light" };
    var wa_widgetSetting = { "title": "Easterndistilleries", "subTitle": "Hello, How can we assist you today", "headerBackgroundColor": "#1fff44", "headerColorScheme": "dark", "greetingText": "Hi there! \nHow can I help you?", "ctaText": "Start Chat", "btnColor": "#1A1A1A", "cornerRadius": 40, "welcomeMessage": "Hello", "btnColorScheme": "light", "brandImage": "./img/logo.png", "darkHeaderColorScheme": { "title": "#333333", "subTitle": "#4F4F4F" } };
    window.onload = () => {
        _waEmbed(wa_btnSetting, wa_widgetSetting);
    };
</script>

</body>

</html>