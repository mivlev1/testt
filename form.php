<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>back-3</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">
</head>

<body>
<div class="main">
    <div class="block_4">
        <h1>Form</h1>
        <form method="POST" id="form">
            <label>
                Имя:<br />
                <input type=text name="field-name" placeholder="Иван Иванов" />
            </label><br />

            <label>
                Поле email:<br />
                <input name="field-email" placeholder="test@example.com" type="email">
            </label><br />

            <label>
                Дата рождения:<br />
                <input name="field-date" value="2012-12-12" type="date" />
            </label><br />

            <label>Пол:</label><br />
            <label class="radio"><input type="radio" checked="checked" name="radio-gender" value=1 />
                Мужской</label>
            <label class="radio"><input type="radio" name="radio-gender" value=0 />
                Женский</label><br />

            <label>Кол-во конечностей:</label><br />
            <label class="radio"><input type="radio" checked="checked" name="radio-limb" value=0 />
                0</label>
            <label class="radio"><input type="radio" name="radio-limb" value=1 />
                1</label>
            <label class="radio"><input type="radio" name="radio-limb" value=2 />
                2</label>
            <label class="radio"><input type="radio" name="radio-limb" value=3 />
                3</label>
            <label class="radio"><input type="radio" name="radio-limb" value=4 />
                4</label><br />

            <label>
                Ваши сверхспособности:<br />
                <select multiple="true" name="power[]">
                    <option value="Бессмертие">Бессмертие</option>
                    <option value="Прохождение сквозь стены">Прохождение сквозь стены</option>
                    <option value="Левитация">Левитация</option>
                </select>
            </label><br />

            <label>
                Биография:<br />
                <textarea name="BIO" placeholder="Расскажите о себе"></textarea>
                <br />
            </label>

            <label>
                <input name="ch" type="checkbox" checked=checked value=1> Ознакомлен с контрактом:<br />
            </label>

            <input type="submit" value="Отправить" />
        </form>
    </div>
</div>
<footer class="foot">
    <div id=contacts>
        <h4>Kozin A<a href ="3/solo.html">.</a>A</h4>
        <h4>student of KUBSU 25/2</h4>
    </div>
</footer>
</body>

</html>