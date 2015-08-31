<?php
namespace App\Main\Controller;


use Ocarina\Http\HttpRequest;
use Ocarina\Http\HttpResponse;

class IndexController {

    public function indexAction(HttpRequest $request, HttpResponse $response) {
        $response->redirect('/ocarina');
    }

}