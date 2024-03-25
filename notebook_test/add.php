<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main class="wrapper">
        <form id="form" class="frm" action="//httpbin.org/post" method="post">
            <fieldset>
                <legend class="form_legend">Личная информация</legend>
                <label for="form_name">
                    <span class="form_txt">Имя</span>
                    <input class="frm_name" type="text" id="form_name" placeholder="Иванов Иван" name="name" value="">
                </label>
                <label for="form_surname">
                    <span class="form_txt">Фамилия</span>
                    <input class="frm_name" type="text" id="form_surname" placeholder="Иванов Иван" name="surname"
                        value="">
                </label>
                <label for="form_secondname">
                    <span class="form_txt">Отчество</span>
                    <input class="frm_name" type="text" id="form_secondname" placeholder="Иванов Иван" name="secondname"
                        value="">
                </label>
                <label>
                    <select class="select" name="time" id="form-select">
                        <option value="">-- Пол --</option>
                        <option value="male">Мужской</option>
                        <option value="female">Женский</option>
                    </select>
                </label>
                <label for="form_bdate">
                    <span class="form_txt"></span>
                    <input class="frm_name" type="date" id="form_date" name="bdate">
                </label>
                <label for="form_phone">
                    <span class="frm_name">Телефон</span>
                    <input class="frm_name" type="text" id="form_phone" placeholder="89000000000" name="phone" value="">
                </label>
                <label for="form_address">
                    <span class="frm_name">Адрес</span>
                    <input type="text" id="form_address" name="address" value="" placeholder="">
                </label>
                <label for="form_email">
                    <span class="frm_name">E-mail</span>
                    <input class="frm_name" type="email" id="form_email" placeholder="123@mail.ru" name="email"
                        value="">
                </label>
                <label for="form_comment">
                    <span class="frm_name">Комментарий</span>
                    <textarea class="frm_name" id="form_comment" name="comment" placeholder=""></textarea>
                </label>
        </form>
    </main>
</body>
</html>