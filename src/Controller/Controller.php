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
                $this->view->render("mainPage");
            break;
            case "articlesPage":
                $this->view->render("articlesPage");
            break;
            case "postPage":
                $this->view->render("postPage");
            break;
            case "reviewPage":
                $this->view->render("reviewPage");
            break;
            case "interviewPage":
                $this->view->render("interviewPage");
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
