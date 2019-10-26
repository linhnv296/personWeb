<?php
namespace App\Modules\Frontend\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{


    public function __construct(){
        parent::__construct();
    }

    public function welcome(Request $request){

        return view(
            'Frontend::home.welcome',
            [
                'message' => 'Welcome Hestia\'s Frontend'
            ]
        );
    }
}
