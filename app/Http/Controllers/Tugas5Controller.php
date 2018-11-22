<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class Tugas5Controller extends Controller
{
    public function create_article() {
        $categories = Category::all();

        return view('tugas5.article.create', compact('categories'));
    }

    public function store_article(Request $request) {
        $article = Article::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        $article->category()->attach($request->category);

        return;
    }

    public function show_article() {
        $articles = Article::all();

        return view('tugas5.article.show', compact('articles'));
    }

    public function show_category() {
        $categories = Category::all();

        return view('tugas5.category.show', compact('categories'));
    }
}
