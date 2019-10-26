<?php
namespace App\Modules\Api\Controllers;

use Illuminate\Http\Request;


class V1Controller extends Controller{

    public function __construct(){
        parent::__construct();

    }

    public function getBooks(Request $request){

        $entries = [
            [
                "isbn" => "9781593275846",
                "title" => "Eloquent JavaScript, Second Edition",
                "author" => "Marijn Haverbeke"
            ],
            [
                "isbn" => "9781449331818",
                "title" => "Learning JavaScript Design Patterns",
                "author" => "Addy Osmani"
            ],
            [
                "isbn" => "9781449365035",
                "title" => "Speaking JavaScript",
                "author" => "Axel Rauschmayer",
            ],
            [
                "isbn" => "9781491950296",
                "title" => "Programming JavaScript Applications",
                "author" => "Eric Elliott"
            ]
        ];

        return response()->json($entries, 200);
    }
}
