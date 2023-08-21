<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index() {
        $data = [
            'title' => 'hallo'
        ];
        return view('admin.pages.test.test', $data);
    }
}
