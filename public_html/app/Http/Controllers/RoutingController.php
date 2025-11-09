<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function root()
    {
        return view('index');
    }

    public function firstLevel(Request $request, $first)
    {
        $viewPath = str_replace('.', '/', $first);
        
        if (View::exists($viewPath)) {
            return view($viewPath);
        }
        
        abort(404);
    }

    public function secondLevel(Request $request, $first, $second)
    {
        $viewPath = str_replace('.', '/', "$first.$second");
        
        if (View::exists($viewPath)) {
            return view($viewPath);
        }
        
        abort(404);
    }

    public function thirdLevel(Request $request, $first, $second, $third)
    {
        $viewPath = str_replace('.', '/', "$first.$second.$third");
        
        if (View::exists($viewPath)) {
            return view($viewPath);
        }
        
        abort(404);
    }

    public function fourthLevel(Request $request, $first, $second, $third, $fourth)
    {
        $viewPath = str_replace('.', '/', "$first.$second.$third.$fourth");
        
        if (View::exists($viewPath)) {
            return view($viewPath);
        }
        
        abort(404);
    }
}