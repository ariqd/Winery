<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminArticleController extends Controller
{
    public function index()
    {
        $data['articles'] = Article::paginate(16);
        return view('admin.artikel.list', $data);
    }
}
