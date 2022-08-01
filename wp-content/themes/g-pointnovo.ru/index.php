<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />

  <title>g-pointnovo</title>
</head>
<body>
  
  <?php 
  
  require_once(__DIR__ . "/src/components/header.php");
  require_once(__DIR__ . "/src/components/intro_carousel.php");
  require_once(__DIR__ . "/src/components/services.php");

  ?>

  <script src="<?php echo get_template_directory_uri(); ?>/node_modules/wow.js/dist/wow.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>