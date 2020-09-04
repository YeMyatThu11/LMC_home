<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;

class ApiController extends Controller
{
    //default api calling will get the at most  20 laravel news with this week's date
    public function callApi(){
        $api=new Api;
        $api_data=$api->getNews();
        return view('welcome')->with('weeklyNews',$api_data);
    }
}
