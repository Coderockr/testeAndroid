<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$loader = require __DIR__.'/vendor/autoload.php';
$app = new Application();

// faz a autenticação do token
$app->before(function (Request $request) use ($app) {
    $token = $request->headers->get('Authorization');
    if (! $token) {
        return new Response(
            json_encode(array('error' => "Token inválido")),
            401,
            array('Content-Type' => 'application/json; charset=utf-8')
        );
    }
    if ($token != '85e4a615f62c711d3aac0e7def5b4903') {
        return new Response(
            json_encode(array('error' => "Token inválido")),
            401,
            array('Content-Type' => 'application/json; charset=utf-8')
        );
    }
});

$app->get('/brand', function() use ($app) {
    $result = array(
        0 => array(
            'id' => 1,
            'created' => "2012-06-20T10:55:27-0300",
            "image" => "http://upload.wikimedia.org/wikipedia/en/thumb/9/9f/Apple-logo.svg/125px-Apple-logo.svg.png",
            "name" => "Apple",
            "description" => "Apple Inc. é uma empresa multinacional norte-americana que tem o objetivo de projetar e comercializar produtos eletrônicos de consumo, software de computador e computadores pessoais",
            "product_collection" => array(
                0 => array(
                    "id" => 1,
                    "created" => "2012-06-20T10:57:52-0300",
                    "description" => "iPhone 4",
                    "featured" => true,
                    "price" => 1400,
                    "status" => 1,
                    "snapshot" => "http://km.support.apple.com/library/APPLE/APPLECARE_ALLGEOS/HT3939/HT3939-iphone_4-side_front_dimensions-001-en.png"    
                ),
                1 => array(
                    "id" => 2,
                    "created" => "2012-06-20T10:58:50-0300",
                    "description" => "iPad",
                    "featured" => true,
                    "price" => 1600,
                    "status" => 1,
                    "snapshot" => "http://www.zurb.com/playground/playground/ipad-stencil/ipad-normal.jpg"
                ),
            )    
        ),
        1 => array(
            'id' => 2,
            'created' => "2012-06-20T10:56:05-0300",
            "image" => "http://images.dailytech.com/nimage/samsung-logo.jpg",
            "name" => "Samsung",
            "description" => "O grupo Samsung é uma corporação multinacional que atua em diversos ramos da área de tecnologia da informação com sede em Seul, Coreia do Sul",
            "product_collection" => array(
                0 => array(
                    "id" => 3,
                    "created" => "2012-06-20T11:04:40-0300",
                    "description" => "Galaxy Tab",
                    "featured" => true,
                    "price" => 1650,
                    "status" => 1,
                    "snapshot" => "http://static.guim.co.uk/sys-images/Technology/Pix/pictures/2010/9/2/1283427691059/Galaxy-Tab-001.jpg"
                ),
                1 => array(
                    "id" => 4,
                    "created" => "2012-06-20T11:05:34-0300",
                    "description" => "Galaxy S3",
                    "featured" => true,
                    "price" => 1150,
                    "status" => 1,
                    "snapshot" => "http://cdn9.mos.techradar.com///art/mobile_phones/Samsung/GalaxyS3/Galaxy%20Fire/Samsung_Galaxy_S3_08-380-75.JPG"
                ),
            )    
        ),
    );

    return $app->json($result);
});

$app->run();