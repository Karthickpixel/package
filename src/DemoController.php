<?php

namespace Demo\Project;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index($routes){
        $result = $routes;
        // dd($result);
        return view('project::demo', compact('result'));
    }
}
