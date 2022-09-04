<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Auth;

class ArticleController extends Controller
{
    //TAMPILKAN SEMUA ARTICLE
    public function index()
    {
        $articles = Article::orderBy('date', 'DESC')->get();
        return view('admin.articles', compact('articles'));
    }

    //TAMPILKAN HALAMAN MENAMBAH ARTIKEL
    public function addArticle()
    {
        return view('admin.articles_add');
    }

    //MEMASUKKAN DATA KE DATABASE
    public function storeArticle(Request $request)
    {
        $article = new Article();
        $article->user_id = Auth::user()->id;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->date = $request->date;
        $article->save();

        return redirect('/admin/articles');
    }

    //MENAMPILKAN EDIT ARTIKEL
    public function editArticle($id)
    {
        $article = Article::find($id);
        return view('admin.articles_edit', compact('article'));
    }

    //MENGUBAH DATA DI DATABASE
    public function updateArticle(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->date = $request->date;
        $article->update();

        return redirect()->back();
    }

    //MENGHAPUS ARTIKEL
    public function deleteArticle($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->back();
    }
}
