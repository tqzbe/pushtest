<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OneSignal;

class pushController extends Controller
{
    public function test()
    {
        dd(OneSignal::sendNotificationToAll("Some Message", $url = 'http://tqz.be', $data =["template_id" => "b421cbe6-e8bd-4934-904e-e3c52919ec5c"]));
    }
}
