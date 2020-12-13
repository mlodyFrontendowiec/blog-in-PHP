<?php
declare(strict_types=1);

namespace App\Model;

class Model
{
    public function __construct()
    {
        $this->mysqli = mysqli_connect("localhost", "admin_blog", "1joGSzxV7OfXUcdQ", "blog");
    }
    public function requestLogin($POST):void
    {
        session_start();
        $password = $POST["password"];
        $login = $POST["login"];
        $res = mysqli_query($this->mysqli, "SELECT * FROM admins WHERE login = '$login'");
       
        $row = mysqli_fetch_assoc($res);
        if (!$row["password"]) {
            header("Location: /?action=failLogin");
            session_destroy();
        }

        if (password_verify($password, $row["password"])) {
            $_SESSION['user'] = $login;
            $_SESSION['acces'] = 1;
            setcookie("login", "true");
            header("Location: /?action=adminPanel");
        } else {
            header("Location: /?action=failLogin");
            session_destroy();
        }
    }
    public function logoutAdmin()
    {
        session_start();
        $_SESSION = array();
        setcookie("login", "false");
        header("Location:/?action=loginAdmin");
        session_destroy();
    }
    public function addContent(array $POST):void
    {
        $type = $POST["type"];
        $title = $POST["title"];
        $content = $POST["content"];
        mysqli_query($this->mysqli, "INSERT INTO $type(title,content) VALUES ('$title','$content')");
        header("Location: /?action=adminPanel");
    }
}
