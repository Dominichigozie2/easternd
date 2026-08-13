<?php
include 'head.php';
?>

       
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <br>
        <br>
        <div class="container brand-container">
            <div class="col-left">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper mySwiper2 displaySwiper">
                        <?php
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM `calidonb_tb` WHERE cbid = '{$id}'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result)) {
                            ?>
                        <div class="swiper-wrapper displaywrapper">
                        <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                            <?php
                                if (!empty($row['cbfimage'])) {
                                    ?>
                                    <div class="swiper-slide displayslide">
                                        <img src="./admin/upload/<?php echo htmlspecialchars($row['cbfimage']); ?>" />
                                    </div>
                                    <?php
                                }                                
                                if (!empty($row['cbsimage'])) {
                                    ?>
                                    <div class="swiper-slide displayslide">
                                        <img src="./admin/upload/<?php echo htmlspecialchars($row['cbsimage']); ?>" />
                                    </div>
                                    <?php
                                }                                
                                if (!empty($row['cbtimage'])) {
                                    ?>
                                    <div class="swiper-slide displayslide">
                                        <img src="./admin/upload/<?php echo htmlspecialchars($row['cbtimage']); ?>" />
                                    </div>
                                    <?php
                                }                                
                                if (!empty($row['cbftimage'])) {
                                    ?>
                                    <div class="swiper-slide displayslide">
                                        <img src="./admin/upload/<?php echo htmlspecialchars($row['cbftimage']); ?>" />
                                    </div>
                                    <?php
                                }                                
                            ?>
                        
                            <?php
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <?php
                            }
                            ?>
                    </div>
                    <br>
                    <div thumbsSlider
                        class="swiper mySwiper clickimage-swiper">
                        <?php
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM `calidonb_tb` WHERE cbid = '{$id}'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result)) {
                            ?>
                        <div class="swiper-wrapper clickimge-wrapper">
                        <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                            <?php
                                  if (!empty($row['cbfimage'])) {
                                    ?>
                                    <div class="swiper-slide displayslide">
                                        <img src="./admin/upload/<?php echo htmlspecialchars($row['cbfimage']); ?>" />
                                    </div>
                                    <?php
                                } 
                                if (!empty($row['cbsimage'])) {
                                    ?>
                                    <div class="swiper-slide displayslide">
                                        <img src="./admin/upload/<?php echo htmlspecialchars($row['cbsimage']); ?>" />
                                    </div>
                                    <?php
                                }                                
                                if (!empty($row['cbtimage'])) {
                                    ?>
                                    <div class="swiper-slide displayslide">
                                        <img src="./admin/upload/<?php echo htmlspecialchars($row['cbtimage']); ?>" />
                                    </div>
                                    <?php
                                }                                
                                if (!empty($row['cbftimage'])) {
                                    ?>
                                    <div class="swiper-slide displayslide">
                                        <img src="./admin/upload/<?php echo htmlspecialchars($row['cbftimage']); ?>" />
                                    </div>
                                    <?php
                                }                                
                            ?>
                        
                            
                          
                            <?php
                            }
                            ?>
                        </div>
                        <?php
                        }
                        ?>
                </div>
            </div>
            <br>
            <br>
            <?php
                    $id = $_GET['id'];
                    $query = "SELECT * FROM `calidonb_tb` WHERE cbid = '{$id}'";
                    $result2 = mysqli_query($conn, $query);
                    
                    while($roll = mysqli_fetch_assoc($result2)) {
                        ?>
            <div class="display-details">
                <h4><?php
                    echo $roll['cbname'];
                ?></h4>
                <div class="display-description">
                    <h4>Availability: <span>In stock</span></h4>
                    <br>
                    <p><?php
                    echo $roll['cbdesc'];
                    ?>
                    </p>
                    <br>
                    <br>
                    <h5>category: <span><?php
                    echo $roll['cbcat'];
                ?></span></h5>
                    <h5>size: <span><?php
                    echo $roll['cbfsize'];
                ?></span></h5>
                </div>
            </div>
            <?php
                    }
            ?>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="product-size container">
            <h4>product sizes</h4>
            <?php
                $sql = "SELECT cbfsize, cbfbottle, cbssize, cbsbottle, cbtsize, cbtbottle, cbftsize, cbftbottle FROM `calidonb_tb` WHERE cbid = '{$_GET['id']}'";
                $result = mysqli_query($conn, $sql);
                if (mysqlI_num_rows($result) > 0) {
                   
            ?>
            <ul>
                    <?php
                         while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <h5>size</h5>
                <h5>types</h5>
                <?php
                    if (!empty($row['cbfsize'])) {
                        echo "<li>" . htmlspecialchars($row['cbfsize']) . "</li>";
                    } else {
                        echo "";
                    }
                    if (!empty($row['cbfbottle'])) {
                        echo "<li>" . htmlspecialchars($row['cbfbottle']) . "</li>";
                    } else {
                        echo "";
                    }
                    if (!empty($row['cbssize'])) {
                        echo "<li>" . htmlspecialchars($row['cbssize']) . "</li>";
                    } else {
                        echo "";
                    }
                    if (!empty($row['cbsbottle'])) {
                        echo "<li>" . htmlspecialchars($row['cbsbottle']) . "</li>";
                    } else {
                        echo "";
                    }
                    if (!empty($row['cbtsize'])) {
                        echo "<li>" . htmlspecialchars($row['cbtsize']) . "</li>";
                    } else {
                        echo "";
                    }
                    if (!empty($row['cbtbottle'])) {
                        echo "<li>" . htmlspecialchars($row['cbtbottle']) . "</li>";
                    } else {
                        echo "";
                    }
                    if (!empty($row['cbftsize'])) {
                        echo "<li>" . htmlspecialchars($row['cbftsize']) . "</li>";
                    } else {
                        echo "";
                    }
                    if (!empty($row['cbftbottle'])) {
                        echo "<li>" . htmlspecialchars($row['cbftbottle']) . "</li>";
                    } else {
                        echo "";
                    }
                ?>
                <?php
                    }
                ?>
            </ul>
            <?php
                }
            ?>
        </div>
        <div class="brand">
            <div class="brand-container container">
                <h4>Other Brands</h4>
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
        <script
        src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

      <!-- Swiper JS -->  
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

        <!-- Swiper JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
            var swiper = new Swiper(".mySwiper", {
              spaceBetween: 10,
              slidesPerView: 4,
              freeMode: true,
              watchSlidesProgress: true,
            });
            var swiper2 = new Swiper(".mySwiper2", {
              spaceBetween: 10,
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              thumbs: {
                swiper: swiper,
              },
            });
          </script>

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
           <script src="./js/script.js"></script>
    </body>
</html>
