<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BlogIT</title>
    <link rel="stylesheet" href="../style/css/style.css" />
</head>

<body class="page">

    <form action="/?action=validateLogin" method="POST" class="form">
        <?php if ($_GET["action"]=="failLogin"):?>
        <p class="form__fail">Niepoprawny login lub hasło</p>
        <?php endif;?>
        <h2 class="form__title">Zaloguj się do panelu admina</h2>
        <label class="form__label">Login:<input type="text" class="form__input" required placeholder="login"
                name="login" /></label>
        <label class="form__label">Hasło:<input class="form__input" type="password" required placeholder="password"
                name="password" /></label>
        <input class="form__button" type="submit" value="Zaloguj" />
    </form>

</body>

</html>