<?php

declare(strict_types=1);

namespace App\Controller;

use App\View;
use App\Model\Model;

class Controller
{
    private array $get ;
    private array $post;
    public View $view;
    private Model $model;
    public function __construct($data)
    {
        $this->get =$data['get'];
        $this->post =$data['post'];
        $this->view = new View();
        $this->model = new Model();
    }

    public function showPage()
    {
        switch ($this->get['action']  ?? "mainPage") {
            case "mainPage":
                $data = $this->model->getData('article');
                $this->view->render("mainPage", $data);
                setcookie("login", "false");
            break;
            case "articlesPage":
                $data = $this->model->getData('article');
                $this->view->render("articlesPage", $data);
            break;
            case "postPage":
                $data = $this->model->getData('post');
                $this->view->render("postPage", $data);
            break;
            case "reviewPage":
                $data = $this->model->getData('review');
                $this->view->render("reviewPage", $data);
            break;
            case "interviewPage":
                $data = $this->model->getData('interview');
                $this->view->render("interviewPage", $data);
            break;
            case "loginAdmin":
                $this->view->render("admin/loginAdmin");
            break;
            case "adminPanel":
                $this->view->render("admin/adminPanel");
            break;
            case "validateLogin":
                $this->model->requestLogin($this->post);
            break;
            case "failLogin":
                $this->view->render("admin/loginAdmin");
            break;
            case "logoutAdmin":
                $this->model->logoutAdmin();
            break;
            case "addContent":
                $this->model->addContent($this->post);
            break;
        }
    }
}
