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
            <li class="list-items dropdown">
                <a>Productss<i class="fa-solid fa-chevron-down"></i></a>

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

<div class="page-hero">
    <div class="page-container container">
        <h3>EDFI Contact Hub</h3>
        <div class="click-back-menu">
            <li><a href="./index.php">Home</a></li>
            <li class="thestyle"></li>
            <li>Contact</li>
        </div>
    </div>
</div>

<div class="contact-page">
    <div class="contact-info">
        <ul>
            <li>
                <i class="fa-solid fa-location-dot"></i>

                <h4><span>Km 2, Onitsha-Atani Road, Harbour industrial layout, Onitsha, Anambra State, Nigeria</span></h4>
            </li>
            <li><i class="fa-solid fa-phone"></i>

                <h4>Sales<span>+2348033166700</span></h4>
                <h4>For enquiry<span>+2348062900707</span></h4>
            </li>
            <li><i class="fa-solid fa-envelope"></i>

                <h4>Sales<span>sales@easterndistilleries.com</span></h4>
                <h4>Career<span>hrm@krisoralgroup.com</span></h4>
                <h4>For support<span>enquiry@easterndistilleries.com</span></h4>
            </li>
        </ul>
    </div><br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <div class="contact-container container">

        <div class="btn-action" id="btn-action">
            Contact Us
        </div>
        <p>We're excited to hear from you! Please share your thoughts, questions, or suggestions with us. Your feedback
            is invaluable in our commitment to continuous improvement</p>
        <br>
        <br>

        <form action="sendmail.php" class="form" method="POST">
            <div class="input-field">
                <input type="text" placeholder="Enter your firstname" name="Cfname">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-field">
                <input type="text" placeholder="Enter your last name" name="Clname">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-field">
                <input type="email" placeholder="Enter your email" name="Cmail">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-field">
                <input type="text" placeholder="Subject" name="Csubject">
                <i class="fa-solid fa-file"></i>
            </div>
            <div class="input-field spanTwo">
                <select name="department" required>
                    <option value="">Selete the reason</option>
                    <option value="sales@easterndistilleries.com">Sales Department</option>
                    <option value="hrm@krisoralgroup.com">Employment Department</option>
                </select>
                <i class="fa-solid fa-building"></i>
            </div>
            <div class="input-field spanTwo">
                <textarea name="Cmessage" id="Textarea" placeholder="Enter your message"></textarea>
                <i class="fa-solid fa-message"></i>
            </div>
            <button name="Csubmit">Submit</button>
        </form>
    </div>
</div>
<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7490.616424126899!2d6.741045208242207!3d5.992552378583712!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1043c04287a65edf%3A0x1294f64997d6c45e!2sAtani%20Rd%2C%20Anambra%2C%20Nigeria!5e0!3m2!1sen!2sus!4v1717853615958!5m2!1sen!2sus"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="footer">
    <div class="container footer-container">
        <div class="footer-logo">
            <a href="index.php"><img src="./img/logo.png" alt></a>
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
                <li><a href="tel:+234(0)803-316-6700"><i class="fa-solid fa-phone"></i>
                        <span>+2347066586037</span></a></li>
                <li><a href="mailto:sales@easterndistilleries.com"><i class="fa-solid fa-envelope"></i>
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
<script src="./js/script.js"></script>
<?php
if (isset($_SESSION['status'])) {
    $statusMessage = $_SESSION['status'];
    unset($_SESSION['status']);
    echo "<script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '" . $statusMessage . "',
                showConfirmButton: false,
                timer: 8000
            });
        </script>";
}
?>
<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
<script>
    var wa_btnSetting = { "btnColor": "#16BE45", "ctaText": "WhatsApp Us", "cornerRadius": 40, "marginBottom": 20, "marginLeft": 20, "marginRight": 20, "btnPosition": "right", "whatsAppNumber": "7046586037", "welcomeMessage": "Hello", "zIndex": 999999, "btnColorScheme": "light" };
    var wa_widgetSetting = { "title": "Easterndistilleries", "subTitle": "Chat with us", "headerBackgroundColor": "#1fff44", "headerColorScheme": "dark", "greetingText": "Hi there! \nHow can I help you?", "ctaText": "Start Chat", "btnColor": "#1A1A1A", "cornerRadius": 40, "welcomeMessage": "Hello", "btnColorScheme": "light", "brandImage": "https://uploads-ssl.webflow.com/5f68a65cd5188c058e27c898/6204c4267b92625c9770f687_whatsapp-chat-widget-dummy-logo.png", "darkHeaderColorScheme": { "title": "#333333", "subTitle": "#4F4F4F" } };
    window.onload = () => {
        _waEmbed(wa_btnSetting, wa_widgetSetting);
    };
</script>

</body>

</html>