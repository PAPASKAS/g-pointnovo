<?php

function service_component(string $img_name, string $title, string $text): void {
  $template = get_template_directory_uri();

  echo <<<HTML
    <div class="card col-md-5 col-12 wow">
      <img src="{$template}/images/services/{$img_name}" class="card-img-top" alt="{$img_name}">
      <div class="card-body">
        <hr />
        <h5 class="card-title">{$title}</h5>
        <p class="card-text">{$text}</p>
      </div>
    </div>
  HTML;
}

?>

<div class="services mt-4">
  <div class="container">
    <div class="row gap-3 justify-content-center">
      <?php

      service_component("profit_pure.jpg", "Увеличить прибыль и обороты компании", "");
      service_component("e17fa06a-6d78-4934-ba20-fb243fbc6222.jpg", "Выбрать менеджера", "");
      service_component("depositphotos_85319520-stock-illustration-declining-graph-icon-declining-chart.jpg", "Если проблема в продажах, маркетинге и рекламе", "");
      service_component("d3ea7c47bf466c607eb925d4f529558a.png", "Выбрать продукт продвижения", "");
      service_component("security_internet.jpg", "Защитить свой бизнес и здоровье", "");
      service_component("469.jpg", "Купить оборудование для офиса", "");

      ?>
    </div>
  </div>
</div>
