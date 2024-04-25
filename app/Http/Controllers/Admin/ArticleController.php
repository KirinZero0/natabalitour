<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all(); // Retrieve all articles from the database
        return view('admin.panel.article.index', compact('articles')); // Return view with articles data
    }

    public function edit(Article $article)
    {
        return view('admin.panel.article.edit', compact('article')); // Return view with article data
    }

    public function create()
    {
        return view('admin.panel.article.create'); // Return view for creating a new article
    }

    public function delete(Article $article)
    {
        $article->delete(); // Delete the article
        return redirect()->route('admin.article.index')->with('success', 'Article deleted successfully'); // Redirect with success message
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $article = new Article();
        $article->fill($request->only(
            'article_code',
            'article_title',
            'description',
            'image' )); 

        $article->saveOrFail();
        return redirect()->route('admin.article.index');
    }

    public function update(Request $request, Article $article)
    {

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $article->fill($request->only(
            'article_code',
            'article_name',
            'description')); 

        if (!blank($request->image)) {
            $article->image = $request->image;
        }
    
        $article->saveOrFail();
        return redirect()->route('admin.article.index')->with('success', 'Article updated successfully'); // Redirect with success message
    }
}
