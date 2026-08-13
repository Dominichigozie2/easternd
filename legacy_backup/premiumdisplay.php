<?php
include('head.php');
?>
<br><br><br><br><br><br>
<section class="display-section">
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM `pbrand_tb` WHERE pbid = '{$id}'";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="section-container container">
            <div class="display-image">
                <img src="./admin/upload/<?php echo htmlspecialchars($row['pbimage']); ?>" alt="">
            </div>
            <div class="display-section-content">
                <div class="image-logo">
                    <img src="./admin/upload/<?php echo htmlspecialchars($row['pbimage7']); ?>" alt="">
                </div>
                <h3><?php echo htmlspecialchars($row['pbname']); ?></h3>
                <p><?php echo htmlspecialchars($row['pbdescription']); ?></p>
                <br>
                <div class="more-info">
                    <h4><?php echo htmlspecialchars($row['launched']); ?><span>cl</span></h4>
                    <h4><?php echo htmlspecialchars($row['abv']); ?><span>ABV</span></h4>
                    <h4><?php echo htmlspecialchars($row['category']); ?><span>Category</span></h4>
                </div>
                <a href="contact.php">order now <i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
        <?php
    }
    ?>

    <br><br><br><br><br><br><br>
    <!-- Display Nutrient or Ingredient Section -->
     <?php
           if (!empty($row['energy']) || !empty($row['ingredient'])) {
               
     ?>
    <div class="brand_igd">
        <div class="brand-ingredients container">
            <?php
            // Check if any nutrient values are present
            if (!empty($row['energy']) || !empty($row['protein']) || !empty($row['carbohydrate']) || !empty($row['fat']) || !empty($row['dieteryfiber']) || !empty($row['sodium'])) {
                ?>
                <div class="brand-contents">
                    <h3>Nutritional Information</h3>
                    <ul>
                        <?php if (!empty($row['energy'])): ?>
                            <li>Energy<span><?php echo htmlspecialchars($row['energy']); ?></span></li>
                        <?php endif; ?>
                        <?php if (!empty($row['protein'])): ?>
                            <li>Protein<span><?php echo htmlspecialchars($row['protein']); ?></span></li>
                        <?php endif; ?>
                        <?php if (!empty($row['carbohydrate'])): ?>
                            <li>Carbohydrate<span><?php echo htmlspecialchars($row['carbohydrate']); ?></span></li>
                        <?php endif; ?>
                        <?php if (!empty($row['fat'])): ?>
                            <li>Fat<span><?php echo htmlspecialchars($row['fat']); ?></span></li>
                        <?php endif; ?>
                        <?php if (!empty($row['dieteryfiber'])): ?>
                            <li>Dietary Fiber<span><?php echo htmlspecialchars($row['dieteryfiber']); ?></span></li>
                        <?php endif; ?>
                        <?php if (!empty($row['sodium'])): ?>
                            <li>Sodium<span><?php echo htmlspecialchars($row['sodium']); ?></span></li>
                        <?php endif; ?>
                    </ul>
                    <a href="contact.php">order now <i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <?php
            } else {
                // If no nutrient values are present, display ingredients
                $ingredients = $row['ingredient'];
                if (!empty($ingredients)) {
                    $ingredients_array = explode(',', $ingredients);
                    ?>
                    <div class="brand-contents">
                        <h3>Ingredients</h3>
                        <ul>
                            <?php foreach ($ingredients_array as $ingredient): ?>
                                <li class="ingredient"><span><?php echo htmlspecialchars(trim($ingredient)); ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.php">order now <i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                    <?php
                }
            }
            ?>
        <!-- Display the image related to the ingredient or nutrient section -->
        <div class="brand-image-display">
            <img src="./admin/upload/<?php echo htmlspecialchars($row['pbimage']); ?>" alt="">
        </div>

        </div>
    </div>
   
    <?php
    }else{
        echo "";
    }
    ?>

    <?php
// Check if there are any gallery images before displaying the gallery section
$has_gallery_images = false;
for ($i = 1; $i <= 6; $i++) {
    $img_key = "pbimage$i";
    if (!empty($row[$img_key])) {
        $has_gallery_images = true;
        break;
    }
}

if ($has_gallery_images) {
    ?>
    <div class="gallery container">
        <h3>Different Sizes</h3>
        <br><br><br>
        <div class="gallery-container">
            <?php
            for ($i = 1; $i <= 6; $i++) {
                $img_key = "pbimage$i";
                $size_key = "size{$i}"; // Assuming size data is stored in the database with this key
                
                if (!empty($row[$img_key])) {
                    $image_size = !empty($row[$size_key]) ? htmlspecialchars($row[$size_key]) : ''; // Fetch size from the database
                    ?>
                    <div class="gallery-box">
                        <img src="./admin/upload/<?php echo htmlspecialchars($row[$img_key]); ?>" alt="">
                        <h1><?php echo $image_size; ?></h1> <!-- Display image size -->
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <?php
}
?>

</section>
<section class="follow">
    <div class="social-media container">
        <div class="flow-contents">
            <h3>Embrace the Extraordinary.</h3>
            <p>We are social, Connect with our community on social media and stay informed about the latest news, events, and promotions!</p>
            <a href="contact.php">More Inquiries<i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
        <div class="media">
            <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-tiktok"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>
</section>
<div class="footer">
    <div class="container footer-container">
        <div class="footer-logo">
            <img src="./img/logo.png" alt="">
        </div>
        <div class="footer-ul">
            <ul>
                <h5>Useful</h5>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./about.php">About</a></li>
                <li><a href="./brandP.php">Premium Brands</a></li>
            </ul>
            <ul>
                <h5></h5>
                <li><a href="./brandC.php">Calidon Brands</a></li>
                <li><a href="krisoral.com">Corporate Social Responsibilities</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
            <ul>
                <h5>Our Info</h5>
                <li><a href="#"><i class="fa-solid fa-phone"></i><span>+2347066586037</span></a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"></i><span>sales@easterndistilleries.com</span></a></li>
                <li><a href="#"><i class="fa-solid fa-clock"></i><span>24/7 Customer Support</span></a></li>
            </ul>
        </div>
        <div class="footer-media">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>
    <h6>Eastern Distilleries and Food Industries Limited 2024, All Rights Reserved.</h6>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script src="./js/script.js"></script>
</body>
</html>
