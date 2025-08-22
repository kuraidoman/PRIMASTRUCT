<?php
// index.php - Main file that handles everything
$page = isset($_GET['page']) ? htmlspecialchars($_GET['page'], ENT_QUOTES, 'UTF-8') : 'home';
$allowed_pages = ['home', 'about', 'services', 'contact'];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
        switch($page) {
            case 'about': echo 'About Us - Prima-struct Engineering Consultancy'; break;
            case 'services': echo 'Our Services - Prima-struct Engineering Consultancy'; break;
            case 'contact': echo 'Contact Us - Prima-struct Engineering Consultancy'; break;
            default: echo 'Prima-struct Engineering Consultancy'; break;
        }
        ?>
    </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" 
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" 
    crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
</head>
<body>
    <div id="start"></div>
    
    <script>
        function note() {
            alert("The account is still under construction. Come by next time!");
        }
    </script>

    <!-- HEADER SECTION -->
    <header>
        <nav class="header">
            <a class="navbar-brand" href="index.php">
                <img class="logo" src="assets/logo.png"/> 
                <span>&ensp;Prima-struct Engineering Consultancy</span> 
            </a>
        </nav>
        <nav class="navigation">
            <a href="index.php?page=home" <?php echo ($page == 'home') ? 'class="active"' : ''; ?>>Home</a>
            <a href="index.php?page=about" <?php echo ($page == 'about') ? 'class="active"' : ''; ?>>About</a>
            <a href="index.php?page=services" <?php echo ($page == 'services') ? 'class="active"' : ''; ?>>Services</a>
            <a href="index.php?page=contact" <?php echo ($page == 'contact') ? 'class="active"' : ''; ?>>Contact Us</a>
        </nav>
    </header>

    <!-- MAIN CONTENT AREA -->
    <main class="main-content">
        <?php
        // Include the appropriate page content
        switch($page) {
            case 'home':
                include 'pages/home.php';
                break;
            case 'about':
                include 'pages/about.php';
                break;
            case 'services':
                include 'pages/services.php';
                break;
            case 'contact':
                include 'pages/contact_us.php';
                break;
        }
        ?>
    </main>

    <!-- FOOTER SECTION -->
    <footer>
        <div class="footer-content">
            <p>&copy; <?php echo date('Y'); ?> Prima-struct Engineering Consultancy. All rights reserved.</p>
            <div class="social-icons">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
    crossorigin="anonymous"></script>
</body>
</html>