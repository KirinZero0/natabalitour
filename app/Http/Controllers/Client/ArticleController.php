<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all(); // Retrieve all articles from the database
        return view('articles.index', compact('articles')); // Return view with articles data
    }

    public function show (Article $article)
    {
        return view('acticles.details', compact('article'));
    }
}
