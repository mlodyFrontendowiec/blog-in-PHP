<?php
declare(strict_types=1);

namespace App\Model;

class Model
{
    public function requestLogin($POST):void
    {
        $password = $POST["password"];
        $login = $POST["login"];
        $this->mysqli = mysqli_connect("localhost", "admin_blog", "1joGSzxV7OfXUcdQ", "blog");
        $res = mysqli_query($this->mysqli, "SELECT * FROM admins WHERE login = '$login' AND password = '$password'");
        $row = mysqli_fetch_assoc($res);
        if (!$row) {
            header("Location: /?action=failLogin");
        } else {
            header("Location: /?action=adminPanel");
        }
    }
    public function addContent(array $POST):void
    {
        $this->mysqli = mysqli_connect("localhost", "admin_blog", "1joGSzxV7OfXUcdQ", "blog");
        $type = $POST["type"];
        $title = $POST["title"];
        $content = $POST["content"];
        mysqli_query($this->mysqli, "INSERT INTO $type(title,content) VALUES ('$title','$content')");
        header("Location: /?action=adminPanel");
    }
}
