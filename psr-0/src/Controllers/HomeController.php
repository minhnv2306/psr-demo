<?php
namespace Controllers;

use Models\Test_User;
use Models\User;

class HomeController 
{
    public function actionIndex()
    {
        return (new User)->list();
        // return (new Test_User)->list();
    }
}
