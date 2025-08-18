<?php
// Get the page parameter from URL (default to 'home') and sanitize it
$page = isset($_GET['page']) ? htmlspecialchars($_GET['page'], ENT_QUOTES, 'UTF-8') : 'home';

// Define allowed pages for security
$allowed_pages = ['home', 'about', 'services', 'contact'];

// Validate the page parameter
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
    <title>Prima-struct Engineering Consultancy</title>
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" 
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" 
    crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>

</head>
<body>
    <div id="start"></div>
    <script>
        function note() 
        {
          alert("The account is still under construction. Come by next time!");
        }
        </script>

    <?php include 'header.php'; ?>
    
    <?php include 'footer.php'; ?>
    
</body>

</html>
