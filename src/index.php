<?php

use blog\Blog;

require_once './vendor/autoload.php';
require_once './config/config.php';
// print_r(URLROOT);
// print_r(ROOT);
// print_r(dirname(__FILE__));
$blog = new Blog();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" name="viewport" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="./assests/css/style.css" />
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <title>BLOG</title>
</head>

<body>
    <?php echo $blog->header(); ?>
    
    <?php echo $blog->footer(); ?>
    
</body>

</html>