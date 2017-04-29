<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    private function getModel()
    {
        $controller = explode('\\', get_class($this))[4];
        $class = 'App\\'.str_replace('Controller', '', $controller);
        return new $class;
    }

    protected function index()
    {

    }

    protected function store(Request $request)
    {
        $model = $this->getModel();
        $inputs = $request->all();

        $rules = str_replace('sometimes', ' ', $model::$rules);
        $validator = Validator::make($inputs, $rules, $model::$messages);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'error',
                'errors' => $validator->messages()
            ], 403);
        } else {
            $entity = new $model($inputs);
            $entity->save();

            return response()->json(['item' => $entity], 201);
        }
    }

    protected function update()
    {

    }

    protected function delete()
    {

    }
}