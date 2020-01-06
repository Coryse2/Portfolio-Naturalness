<?php

namespace App\Http\Controllers;

use App\Utils\UserSession;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    //Ici on utilise le controller pour passer les informatons de session aux templates
    public function __construct()
    {
        view()->share('userIsConnected', UserSession::isConnected());
        view()->share('connectedUser', UserSession::getUser());
    }
}
