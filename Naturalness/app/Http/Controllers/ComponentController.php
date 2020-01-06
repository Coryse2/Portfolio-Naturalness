<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Component extends BaseController
{
    public function show()
    {
        
        $components = Component::all();
 
        return view('component/components', [
            'components' => $components,
        ]);
    }
}
