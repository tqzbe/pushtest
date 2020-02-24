<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OneSignal;

class pushController extends Controller
{
    public function test()
    {
        dd(OneSignal::sendNotificationToAll("Some Message", $url = 'http://tqz.be'));
    }
}
