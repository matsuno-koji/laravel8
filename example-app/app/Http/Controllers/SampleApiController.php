<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SampleApiController extends Controller
{
    public function sample()
    {
        $users = User::all();
        $data = [
            'message' => 'success',
            'users' =>  $users,
        ];
        return response()->json(data: $data, options: JSON_UNESCAPED_UNICODE);
    }
}
