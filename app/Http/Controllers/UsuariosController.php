<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class UsuariosController extends Controller
{
    public function getUsuarios()
    {
        $client = new Client([
            'base_uri' => 'https://gorest.co.in/public/v2/',
            'timeout'  => 2.0,
        ]);

        $response = $client->get('users')->getBody()->getContents();

        return json_decode($response);
    },
}
