<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="<?= base_url("assets/style.css") ?> " alt="">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            
            <ul class="menu">
            <li><a href="<?= base_url("home") ?> " alt="" class="menu-btn">Home</a></li>
                <li><a href="<?= base_url("about") ?> " alt="" class="menu-btn">About</a></li>
                <li><a href="<?= base_url("education") ?> " alt="" class="menu-btn">Education</a></li>
                <li><a href="<?= base_url("skills") ?> " alt="" class="menu-btn">Skills</a></li>
                <li><a href="<?= base_url("interests") ?> " alt="" class="menu-btn">Personal Interests</a></li>
                <li><a href="<?= base_url("kdrama") ?> " alt="" class="menu-btn">Favorites</a></li>
                <li><a href="<?= base_url("contact") ?> " alt="" class="menu-btn">Contact</a></li>
            </ul>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>

    <script src="<?= base_url("assets/script.js") ?> "></script>
</body>
</html>