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
        setcookie("login", "false");
        $password = $POST["password"];
        $login = $POST["login"];
        $res = mysqli_query($this->mysqli, "SELECT * FROM admins WHERE login = '$login'");
       
        $row = mysqli_fetch_assoc($res);
        if (!$row["password"]) {
            setcookie("login", "false");
            header("Location: /?action=failLogin");
        }

        if (password_verify($password, $row["password"])) {
            $_SESSION['user'] = $login;
            $_SESSION['acces'] = 1;
            setcookie("login", "true");
            header("Location: /?action=adminPanel");
        } else {
            setcookie("login", "false");
            header("Location: /?action=failLogin");
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
        session_start();
        if ($_SESSION['acces'] == 1) {
            $type = $POST["type"];
            $title = $POST["title"];
            $content = $POST["content"];
            mysqli_query($this->mysqli, "INSERT INTO $type(title,content) VALUES ('$title','$content')");
            header("Location: /?action=adminPanel");
        }
    }
    public function getData(string $type):array
    {
        $res =  mysqli_query($this->mysqli, "SELECT * FROM $type");
        $rows = mysqli_fetch_all($res);
        return $rows;
    }
}
