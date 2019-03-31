<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index(Request $request)
    {
        dump($request->input('data'));
        $datas = $request->input('data');

        foreach ($datas as $data) {
            dump($data['id'], $data['value']);
        }

        //update

        // return $data[0];
        // return $data;
    }
}
