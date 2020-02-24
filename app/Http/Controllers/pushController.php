<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OneSignal;

class pushController extends Controller
{
    public function test()
    {
        $parameters = [
            'headings'       => [
                'en' => 'Message Heading',
                'pt' => 'Titulo da msg'
            ],
            'contents'       => [
                'en' => 'Message Content '.Carbon::now()->toString(),
                'pt' => 'Conteudo da msg '.Carbon::now()->toString()
            ],
            'big_picture' => 'http://magic-dsp.com/wp-content/uploads/2018/06/logo_small.png',
            'ios_attachments' => [
                "id" => "http://magic-dsp.com/wp-content/uploads/2018/06/logo_small.png"
            ],
            'ios_badgeType'  => 'Increase',
            'ios_badgeCount' => 1,
            'included_segments' => array('All')
        ];
        //dd(OneSignal::sendNotificationToAll("Le prix de votre réparation est disponible !", $url = 'http://tqz.be', $data =["template_id" => "b421cbe6-e8bd-4934-904e-e3c52919ec5c"]));
        dd(OneSignal::sendNotificationCustom($parameters);
    }
}