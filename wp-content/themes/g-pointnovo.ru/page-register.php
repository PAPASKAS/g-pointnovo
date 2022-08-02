<?php

function input_component(string $type, string $label, string $name): void {
  echo <<<HTML
    <label>
        {$label}
        <input type="{$type}" class="form-control" name="{$name}" required />
    </label>  
  HTML;

}

function checkbox_component(string $text, string $name): void {
  echo <<<HTML
    <div class="form-check ms-3">
      <label class="form-check-label">
        {$text}
        <input class="form-check-input" type="checkbox" value="" required  />
      </label>
    </div>
  HTML;

}

get_header();

?>

<section class="mt-4">
  <div class="container">
    <div class="d-block d-lg-flex align-items-between w-100">
      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
        <button class="nav-link active text-nowrap" id="entity" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Для юридических лиц</button>
        <button class="nav-link text-nowrap" id="individual" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Для физических лиц</button>
      </div>
      <div class="tab-content" id="v-pills-tabContent">

        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="entity" tabindex="0">
          <form action="/entity" method="POST" class="row gap-2 w-100">
            <?php
            input_component("text", "Логин", "login");
            input_component("email", "E-mail", "email");
            input_component("text", "Код клиента в нашей базе", "client_code");
            input_component("text", "Наименование организации", "organization_name");
            input_component("number", "ИНН", "inn");
            input_component("number", "КПП", "kpp");
            input_component("text", "ФИО", "full_name");
            input_component("tel", "Телефон", "phone");
            input_component("password", "Пароль", "password");
            input_component("password", "Подтверждение пароля", "password_confirm");
            input_component("text", "Регион", "region");
            input_component("text", "Населенный пункт", "city");
            input_component("text", "Адрес", "address");
            ?>

            <div class="form-check ms-3">
              <label class="form-check-label">
                Нал
                <input class="form-check-input" type="radio" name="cash" checked />
              </label>
            </div>
            <div class="form-check ms-3">
              <label class="form-check-label">
                Б/нал
                <input class="form-check-input" type="radio" name="cash" />
              </label>
            </div>

            <?php
            input_component("text", "Откуда Вы о нас узнали", "how_did_know_about_us");
            input_component("text", "Промокод", "promo_code");

            checkbox_component("Я соглашаюсь на обработку персональных данных", "personal_data");
            checkbox_component("Настоящим присоединяюсь и выражаю безусловное согласие", "invite_to");
            ?>

            <div class="my-4">
              <button class="btn btn-primary">Зарегистрироваться</button>
            </div>

          </form>
        </div>

        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="individual" tabindex="0">
          Для физических лиц
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
