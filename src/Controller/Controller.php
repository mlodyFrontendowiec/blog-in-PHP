<?php

declare(strict_types=1);

namespace App\Controller;

use App\View;

class Controller
{
    private array $get ;
    private array $post;
    public View $view;
    public function __construct($data)
    {
        $this->get =$data['get'];
        $this->post =$data['post'];
        $this->view = new View();
    }

    public function showPage()
    {
        switch ($this->get['action'] ?? "mainPage") {
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
        }
    }
}
