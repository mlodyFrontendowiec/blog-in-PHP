<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BlogIT</title>
    <link rel="stylesheet" href="../style/css/style.css" />
</head>

<body class="page">

    <section class="section">
        <h1 class="section__header">Add new contnent</h1>
        <form class="section__form" action="/?action=addContent" method="POST">
            <label class="section__label">Type:
                <select name="type" id="cars" class="section__input">
                    <option value="article">article</option>
                    <option value="post">post</option>
                    <option value="review">review</option>
                    <option value="interview">interview</option>
                </select>
            </label>
            <label class="section__label">Title:<input class="section__input" name="title" type="text" /></label>
            <label class="section__label">Content:<br /><textarea name="content" cols="30" rows="10"
                    class="section__textarea"></textarea> <br /><input type="submit" value="Add"
                    class="section__submit" /></label>
        </form>
    </section>
</body>

</html>