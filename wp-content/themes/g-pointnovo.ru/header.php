<?php

function li_component (string $link, string $title): void {
  echo <<<HTML
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href={$link}>{$title}</a>
    </li>
  HTML;
}

?>

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
<header class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Рекламное агенство</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header_navbar" aria-controls="header_navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="header_navbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
        li_component("marketing", "Маркетинг");
        li_component("partners", "Партнеры");
        li_component("news", "Статьи");
        li_component("contacts", "Контакты");
        ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" name="search" placeholder="Поиск по сайту" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Поиск</button>
      </form>
    </div>
  </div>
</header>