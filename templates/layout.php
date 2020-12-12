<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BlogIT</title>
    <link rel="stylesheet" href="style/css/style.css" />
</head>

<body class="page">
    <header class="page__header header">
        <?php
        switch ($page) {
            case "articlesPage":
                echo "<h1 class='header__logo-info'>Articles</h1>";
            break;
            case "interviewPage":
                echo "<h1 class='header__logo-info'>Interview</h1>";
            break;
            case "postPage":
                echo "<h1 class='header__logo-info'>Posts</h1>";
            break;
            case "reviewPage":
                echo "<h1 class='header__logo-info'>Review</h1>";
            break;
            case "admin/loginAdmin":
                echo "<h1 class='header__logo-info'>Sign in</h1>";
            break;
            case "admin/adminPanel":
                echo "<h1 class='header__logo-info'>Admin Panel</h1>";
            break;
            default:
            break;

        }
        ?>
        <h1 class="header__logo"><a class="header__link" href="/">BlogIT</a></h1>
        <div class="header__hamburger hamburger">
            <span class="hamburger__span"></span>
            <span class="hamburger__span"></span>
            <span class="hamburger__span"></span>
        </div>
    </header>
    <main class="page__main main">
        <aside class="main__aside">
            <nav class="main__nav nav">
                <ul class="nav__container">
                    <li class="nav__link-container">
                        <a class="nav__link" href="/?action=mainPage">Main Page</a>
                    </li>
                    <li class="nav__link-container">
                        <a class="nav__link" href="/?action=articlesPage">New Articles </a>
                    </li>
                    <li class="nav__link-container">
                        <a class="nav__link" href="/?action=postPage">Posts</a>
                    </li>
                    <li class="nav__link-container">
                        <a class="nav__link" href="/?action=reviewPage">Reviews</a>
                    </li>
                    <li class="nav__link-container">
                        <a class="nav__link" href="/?action=interviewPage">Interwievs</a>
                    </li>
                </ul>
            </nav>
        </aside>
        <?php require_once("pages/$page.php")?>
    </main>
    <script src="/js/hamburger.js"></script>
    <script src="/js/delete.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>