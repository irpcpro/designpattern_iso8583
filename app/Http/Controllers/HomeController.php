<?php

namespace App\Http\Controllers;


class HomeController extends Controller {
    public function index(){
        dd(
            date('Y/m/d H:i:s'),
            date('md')
        );
    }
}
