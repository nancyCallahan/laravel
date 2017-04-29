<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class UsersController extends ApiController
{
    public function make(Request $request)
    {
        return parent::store($request);
    }
}