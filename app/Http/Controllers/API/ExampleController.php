<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class ExampleController extends Controller
{
    public function index(){
        return response()->json([

            'message' => "All good.",
            'data' => Book::all()
        ], 200);
    }
}
