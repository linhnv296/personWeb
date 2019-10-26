<?php
namespace App\Modules\Backend\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function welcome(Request $request){

        return view(
            'Backend::home.welcome',
            [
                'message' => 'Welcome Hestia\'s Backend'
            ]
        );
    }
}
