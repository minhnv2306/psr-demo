<?php
namespace GHTK\Controllers;

use GHTK\Models\User;

class HomeController 
{
    public function actionIndex()
    {
        return (new User)->list();
    }
}
