<?php

declare(strict_types=1);

namespace App\Controlers;

use Framework\TemplateEngine;

class AuthController {
    public function __construct(private TemplateEngine $view)
    {
        
    }

    public function registerView() {
        echo $this->view->render("register.php");
    }
}