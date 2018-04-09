<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function promosi()
    {
        return view('promosi');
    }

    public function artikel()
    {
        $data['articles'] = Article::paginate(16);
        return view('artikel', $data);
    }

    public function about()
    {
        return view('about');
    }
}
