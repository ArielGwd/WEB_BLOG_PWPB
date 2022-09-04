<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class PageController extends Controller
{
    //TAMPILKAN HALAMAN AWAL
    public function index()
    {
        $articles = Article::orderBy('date', 'DESC')->get();
        return view('home', compact('articles'));
    }

    //TAMPILKAN DETAIL ARTICLE
    public function detailArticle($id)
    {
        $article = Article::find($id);
        return view('detail_article', compact('article'));
    }

    //TAMPILKAN ARTIKEL BERDASARKAN AUTHOR
    public function authorArticle($id)
    {
        $user = User::find($id);
        $articles = $user->articles()->orderBy('date', 'DESC')->get();
        return view('author_article', compact('articles', 'user'));
    }
}
