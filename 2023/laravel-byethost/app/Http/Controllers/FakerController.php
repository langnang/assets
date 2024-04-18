<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class FakerController extends BaseController
{
    public function index(Request $request)
    {
        // $faker = app(\Faker\Generator::class);
        // var_dump($return = $faker->getProviders());
        $return = array_map(function ($item) use ($request) {
            return [
                'name' => $item,
                'link' => $request->url() . '/select_item/' . $item
            ];
        }, ['uuid']);
        return $this->success($return);
    }
    public function select_item(Request $request)
    {
        $method = $request->method;
        $faker = app(\Faker\Generator::class);
        $return = [
            'name' => $method,
            'value' => $faker->{$method}
        ];

        return $this->success($return);
    }
}
