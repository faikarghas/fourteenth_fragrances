<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index(){

        $data = [
        ];

        return view('web.shop.index',$data);
    }

}
