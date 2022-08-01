<?php

function carousel_item(string $img_name, bool $active = false): void {
  $is_active = $active ? "carousel-item active" : "carousel-item";
  $template = get_template_directory_uri();

  echo <<<HTML
    <div class="{$is_active}">
      <img src="{$template}/img/{$img_name}" class="d-block w-100" alt="{$img_name}">
    </div>
  HTML;
}

?>

<div id="intro_carousel_controls" class="intro-carousel carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php
    carousel_item("site-s-nulya-blog_1511275051.04a3c5a0.jpg", true);
    carousel_item("15.jpg");
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#intro_carousel_controls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#intro_carousel_controls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>