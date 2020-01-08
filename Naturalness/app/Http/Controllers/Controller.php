<?php

namespace App\Http\Controllers;

use App\Utils\UserSession;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    //use the controller to give session information to templates
    public function __construct()
    {
        view()->share('userIsConnected', UserSession::isConnected());
        view()->share('connectedUser', UserSession::getUser());
    }
}
