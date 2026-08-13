<?php
include 'head.php';
?>



<div class="page-hero">
        <div class="page-container container">
            <h3>Who We Are</h3>
            <div class="click-back-menu">
                <li><a href="./index.php">Home</a></li>
                <li class="thestyle"></li>
                <li>About</li>
            </div>
        </div>
        <!-- <div class="video-thumbnail">
            <img src="./img/about-baner-2.jpg" alt>
            <div class="play"><i class="fa-solid fa-play"></i></div>
        </div> -->
    </div>
<br>
<br>

<!-- <div id="video-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <video controls muted>
                <source src="./img/herovideo.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div> -->
<br>
<div class="about-details container">
            <h2>About us</h2>
                
            <p>Welcome to Eastern Distilleries and Food Industries Nig. Ltd.
We are Eastern Distilleries and Food Industries Nig. Ltd, a leading name in the food and beverage manufacturing sector in Nigeria. Founded with a commitment to quality and cost effectiveness, we have grown into a trusted brand, recognized for our premium products and ethical business practices.</p>
     
                    <h1>Our journey</h1>
                <p>Established in 1994, Eastern Distilleries and Food Industries Ltd is a subsidiary of Krisoral Group of Companies, holding company with a rich history rooted in the best traditions, with a forward-looking approach. Over the years, we have expanded our portfolio to include a wide range of products, from high-quality spirits to wines, malt, and other ready to drink alcoholic brands, all crafted with the utmost care and expertise. Our journey is a testament to our dedication to excellence and our ability to adapt to the changing needs of our customers.</p>
            
                <h1>Our Products</h1>
                <p>We offer an extensive range of products that cater to the diverse tastes and preferences of our customers. Our prestigious factory, located at Harbour Industrial Layout, Onitsha in Anambra State, manufactures high-quality blends of spirits known for their exceptional flavour and smoothness, all made with the finest ingredients to ensure superior taste and quality</p>
            
                <h1>Our Values</h1>
                <p>At the core of our business, are the values of integrity, loyalty, speed, discipline, commitment, quality and teamwork. We believe in doing business with best practices and ethics, by prioritizing quality, maintaining transparency, creating and delivering value for our customers and continually improving our processes. Our commitment to sustainability drives us to adopt eco-friendly practices in our operations, ensuring that we contribute positively to the environment and the customers we serve.</p>
        
                <h1>Our Vision</h1>
                <p>Our vision is to be a market leader in the food and beverage industry, known for our quality products, innovative approach, and sustainable practices. We aim to create lasting value for our stakeholders by consistently delivering value.</p>
                </div>

    <br>
    <br>
    <br>
    

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