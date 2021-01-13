<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleApiController extends Controller
{
    public function sample()
    {
        $content = [
            'message' => 'はろーわーるど'
        ];
        return response()->json(data: $content, options: JSON_UNESCAPED_UNICODE);
    }
}
