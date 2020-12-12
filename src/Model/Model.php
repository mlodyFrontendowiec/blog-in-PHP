<?php
declare(strict_types=1);

namespace App\Model;

class Model
{
    private string $password;
    private string $login;

    public function requestLogin($POST):void
    {
        $this->password = $POST["password"];
        $this->login = $POST["login"];
        $mysqli = mysqli_connect("localhost", "admin_blog", "1joGSzxV7OfXUcdQ", "blog");
        $res = mysqli_query($mysqli, "SELECT * FROM admins WHERE login = '$this->login' AND password = '$this->password'");
        $row = mysqli_fetch_assoc($res);
        if (!$row) {
            header("Location: /?action=failLogin");
        } else {
            header("Location: /?action=adminPanel");
        }
    }
}
